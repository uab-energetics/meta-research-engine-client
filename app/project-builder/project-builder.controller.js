/**
 * Created by Chris Rocco on 5/15/2017.
 */
angular.module("project-builder")
    .controller("ProjectBuilderController", ProjectBuilderController);

ProjectBuilderController.$inject = ['$scope'];
function ProjectBuilderController( $scope ){
    init();

    // Data Models
    $scope.domains = defaultModel.domains;
    $scope.questions = defaultModel.questions;
    $scope.questionTypes = [
        {
            id: "text",
            name: "Text"
        },
        {
            id: "number",
            name: "Number"
        },
        {
            id: "boolean",
            name: "True | False"
        },
        {
            id: "range",
            name: "Range Slider"
        }
    ];

    // Function Binding
    $scope.editDomain = editDomain;
    $scope.editQuestion = editQuestion;
    $scope.handleDeleteDomain = handleDeleteDomain;
    $scope.handleDeleteQuestion = handleDeleteQuestion;
    $scope.handleSubmitDomain = handleSubmitDomain;
    $scope.handleSubmitQuestion = handleSubmitQuestion;

    // Property Binding
    $scope.selectedQuestionType = $scope.questionTypes[0].id;

    /*-----------------------------------------------------------------*/

    function parseQuestionForm(){
        var form = document.forms.questionForm;
        var name = form.name.value;
        var parent = form.parent.value;
        var question = form.question.value;
        var tooltip = form.tooltip.value;
        var icon = form.icon.value;
        var type = $scope.selectedQuestionType;

        if( parent == "" ){
            alert("Questions must have a parent domain"); return false;
        }

        var questionObject = {
            id: (Math.random() * 99999).toString(),
            parent: parent,
            type: $scope.selectedQuestionType,
            name: name,
            question: question,
            tooltip: tooltip,
            icon: icon
        };

        if( type == "text" ){
            questionObject.placeholder = form.placeholder.value;
        }
        if( type == "number" ){
            questionObject.min = parseInt( form.min.value );
            questionObject.max = parseInt( form.max.value );
            questionObject.unit = form.unit.value;
        }
        if( type == "boolean" ){
            questionObject.trueOption = form.trueOption.value;
            questionObject.falseOption = form.falseOption.value;
        }
        if( type == "range" ){
            questionObject.rangeMin = parseInt( form.rangeMin.value );
            questionObject.rangeMax = parseInt( form.rangeMax.value );
            questionObject.rangeUnit = form.rangeUnit.value;
        }

        form.reset();
        form.icon.value = icon;

        return questionObject;
    }
    function parseDomainForm(){
        var form = document.forms.domainForm;
        var name = form.name.value;
        var parent = form.parent.value;
        var description = form.description.value;
        var tooltip = form.tooltip.value;
        var icon = form.icon.value;

        form.reset();
        form.icon.value = icon;

        var domainObject = {
            id: (Math.random() * 99999).toString(),
            parent: parent,
            name: name,
            description: description,
            tooltip: tooltip,
            icon: icon
        };

        return domainObject;
    }
    function handleSubmitDomain(){
        var newDomainObject = parseDomainForm();
        $scope.domains.push( newDomainObject );
        refresh()
        console.log( newDomainObject );
    }
    function handleSubmitQuestion(){
        var newQuestionObject = parseQuestionForm();
        if( !newQuestionObject ) return;

        $scope.questions.push( newQuestionObject );
        refresh();
        console.log( newQuestionObject );
    }

    function editDomain( domain ){
        console.log( "editing", domain );
        $scope.modalDomain = domain;
        $("#editDomainModal").modal("show");
    }
    function editQuestion( question ){
        $scope.modalQuestion = question;
        $("#editQuestionModal").modal("show");
    }
    function handleDeleteDomain( domain ){
        var msg = "This data cannot be recovered!";
        if( domain.parent === "#" ){
            msg = "This is root domain. All of its variables will be deleted!";
        } else {
            msg = "Questions and sub-domains will be moved to this domain's parent";
        }
        swal({
            title: "Are you sure?",
            text: msg,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(){
            deleteDomain( domain );
            for (var i = 0; i < $scope.domains.length; i++) {
                var obj = $scope.domains[i];
                if( obj.parent === domain.id ) obj.parent = domain.parent;
            }
            for (var i = 0; i < $scope.questions.length; i++) {
                var obj = $scope.questions[i];
                if( obj.parent === domain.id ) obj.parent = domain.parent;
            }
            refresh()
            swal("Deleted!", domain.name + " has been deleted.", "success");
        });
    }
    function handleDeleteQuestion( question ){
        swal({
                title: "Are you sure?",
                text: "This data cannot be recovered!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                deleteQuestion( question );
                refresh();
                swal("Deleted!", question.name + " has been deleted.", "success");
            });
    }
    function deleteDomain( domain ){
        $scope.$apply( function(){
            $scope.domains.splice( $scope.domains.indexOf(domain), 1 );
        });
    }
    function deleteQuestion( question ){
        $scope.$apply( function() {
            $scope.questions.splice($scope.domains.indexOf(question), 1);
        } );
    }

    function init(){
        var promise = DataService.getProjectBuilderData( localStorage.projectKey );
        promise.success( function( data ){
            console.log( "from server", data );
            var structure = data.structure;
            if( structure ){
                $scope.$apply( function(){
                    $scope.domains = structure.domains;
                    $scope.questions = structure.questions;
                });
            }
            /* Display the project name */
            var spanElement = document.getElementById("project-name");
            spanElement.innerHTML = data.projectName;
            renderTree();
        });

        $("#editDomainModal").on('hidden.bs.modal', function () {
            refresh()
        });
        $("#editQuestionModal").on('hidden.bs.modal', function () {
            refresh()
        });
    }

    function refresh(){
        renderTree();
        save();
    }
    function renderTree(){
        var treeData = [];
        for (var i = 0; i < $scope.domains.length; i++) {
            var domain = $scope.domains[i];
            var node = {
                id          : domain.id,
                parent      : domain.parent,
                text        : domain.name,
                icon        : domain.icon,
                state       : {
                    opened    : true
                }
            };
            if( node.parent === "" ) node.parent = "#";
            treeData.push( node );
        }
        for (var i = 0; i < $scope.questions.length; i++) {
            var question = $scope.questions[i];
            var node = {
                id          : question.id,
                parent      : question.parent,
                text        : question.name,
                icon        : question.icon,
                state       : {
                    opened    : true
                }
            };
            if( node.parent === "" ) node.parent = "#";
            treeData.push( node );
        }
        $('#projectStructure').jstree(true).settings.core.data = treeData;
        $('#projectStructure').jstree(true).refresh();
    }
    function save(){
        var structure = {
            domains: $scope.domains,
            questions: $scope.questions
        };
        var req = {
            "structure": JSON.stringify( structure )
        };

        var promise = DataService.postProjectStructure( localStorage.projectKey, req );
        promise.success( function( res ){
            console.log( "saved!", res );
        });
    }
}

const defaultModel = {
    domains: [],
    questions: []
};