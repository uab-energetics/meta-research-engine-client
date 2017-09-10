<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <?php require 'assets/partials/meta-includes.html'; ?>
    <title>Project Builder | Research Coder UAB</title>
    <?php require 'assets/partials/css-includes.html'; ?>
    <link rel="stylesheet" href="/assets/vendor/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="/assets/vendor/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap-treeview/bootstrap-treeview.css">
    <link rel="stylesheet" href="/assets/vendor/jstree/jstree.min.css">
    <link rel="stylesheet" href="/assets/vendor/fontIconPicker-2.0.0/css/jquery.fonticonpicker.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="/assets/vendor/multi-select/multi-select.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
</head>
<body class="animsition">
<?php require 'assets/partials/IE-check.html'; ?>
<?php require 'assets/partials/navbar.html'; ?>
<?php require 'assets/partials/sidebar.html'; ?>
<!-- Page -->
<div class="page" ng-app="project-builder" ng-controller="ProjectBuilderController">
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Edit Projects</li>
        </ol>
        <h1 class="page-title">You are editing:
            <a href="javascript:void(0)"> {[{project.name}]} </a></h1>
        <div class="page-header-actions">
            <a class="btn btn-sm btn-inverse btn-round" href="#" target="_blank">
                <i class="icon wb-link" aria-hidden="true"></i>
                <span class="hidden-sm-down"></span>
            </a>
        </div>
    </div>
    <div class="page-content">
        <div class="row">
            <!-- Structure Tree Column -->
            <div class="col-lg-5 col-md-6">
                <div class="col">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Current Structure</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div id="projectStructure"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Structure Tree Column -->
            <!-- Forms Column -->
            <div class="col-lg-7">
                <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#exampleIconifiedTabsOne"
                               aria-controls="exampleIconifiedTabsOne"
                               role="tab">
                                <i class="icon fa-folder" aria-hidden="true"></i>
                                <strong>DOMAINS</strong>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#exampleIconifiedTabsTwo"
                               aria-controls="exampleIconifiedTabsTwo"
                               role="tab">
                                <i class="icon fa-question" aria-hidden="true"></i>
                                <strong>QUESTIONS</strong>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content pt-15">
                        <div class="tab-pane active" id="exampleIconifiedTabsOne" role="tabpanel">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add New Domain</h3>
                                </div>
                                <div class="panel-body container-fluid">
                                    <form name="domainForm" autocomplete="off" ng-submit="handleCreateDomain()">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <h5 class="example-title">Parent Domain</h5>
                                                <select name="parent" class="form-control">
                                                    <option value="#"> -- none --</option>
                                                    <option ng-repeat="domain in domains track by domain.id"
                                                            value="{[{domain.id}]}">{[{domain.name}]}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="name" type="text" class="form-control" required/>
                                            <label class="floating-label">Name</label>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="description" type="text" class="form-control" required/>
                                            <label class="floating-label">Description</label>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="tooltip" type="text" class="form-control" required/>
                                            <label class="floating-label">Tool Tip</label>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <label class="control-label">icon</label>
                                            <input name="icon" type="text" id="domain-icon-picker" required/>
                                        </div>
                                        <!-- INPUT element -->
                                        <button type="submit" class="btn btn-block btn-primary"> Add to Project</button>
                                    </form>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Domains</h3>
                                </div>
                                <div class="panel-body container-fluid">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Domain</th>
                                            <th>Description</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="domain in domains track by domain.id">
                                            <td> {[{domain.name}]}</td>
                                            <td> {[{domain.description.substring(0, 25)}]}...</td>
                                            <td class="text-nowrap">
                                                <button ng-click="handleEditDomain( domain )" type="button"
                                                        class="btn btn-sm btn-icon btn-flat btn-default"
                                                        data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                                </button>
                                                <button ng-click="handleDeleteDomain( domain )" type="button"
                                                        class="btn btn-sm btn-icon btn-flat btn-default"
                                                        data-toggle="tooltip" data-original-title="Delete">
                                                    <i class="icon wb-close" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="exampleIconifiedTabsTwo" role="tabpanel">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add New Question</h3>
                                    <!--<h4 class="example-title">Active</h4>-->
                                    <!--<p></p>-->
                                </div>
                                <div class="panel-body container-fluid">
                                    <form name="questionForm" autocomplete="off" ng-submit="handleCreateQuestion()">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <h5 class="example-title">Parent Domain</h5>
                                                <select name="parent" class="form-control">
                                                    <option ng-repeat="domain in domains track by domain.id"
                                                            value="{[{domain.id}]}">{[{domain.name}]}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h5 class="example-title"> Type </h5>
                                                <select ng-model="selectedQuestionType"
                                                        ng-options="type.id as type.name for type in questionTypes"
                                                        name="type" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="name" type="text" class="form-control" required/>
                                            <label class="floating-label">Name</label>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="question" type="text" class="form-control" required/>
                                            <label class="floating-label">The Question</label>
                                        </div>
                                        <!-- Type Conditionals -->
                                        <div ng-if="selectedQuestionType === 'number'" class="row">
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Min</label>
                                                <input name="min" type="number" class="form-control"
                                                       placeholder="Lower Bound"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Max</label>
                                                <input name="max" type="number" class="form-control"
                                                       placeholder="Upper Bound"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Unit</label>
                                                <input name="unit" type="text" class="form-control"
                                                       placeholder="grams, celsius, meters"
                                                />
                                            </div>
                                        </div>
                                        <div ng-if="selectedQuestionType === 'boolean'" class="row">
                                            <div class="form-group col-md-6">
                                                <label class="floating-label">True Option</label>
                                                <input name="trueOption" type="text" class="form-control"
                                                       placeholder="Yes"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="floating-label">False Option</label>
                                                <input name="falseOption" type="text" class="form-control"
                                                       placeholder="No"/>
                                            </div>
                                        </div>
                                        <div ng-if="selectedQuestionType === 'text'"
                                             class="form-group form-material floating"
                                             data-plugin="formMaterial">
                                            <input name="placeholder" type="text" class="form-control"/>
                                            <label class="floating-label">Placeholder</label>
                                        </div>
                                        <div ng-if="selectedQuestionType === 'range'" class="row">
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Min</label>
                                                <input name="rangeMin" type="number" class="form-control"
                                                       placeholder="Lower Bound"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Max</label>
                                                <input name="rangeMax" type="number" class="form-control"
                                                       placeholder="Upper Bound"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="floating-label">Unit</label>
                                                <input name="rangeUnit" type="text" class="form-control"
                                                       placeholder="degrees"
                                                />
                                            </div>
                                        </div>
                                        <div ng-show="selectedQuestionType === 'select'" class="form-group">
                                            <div class="example">
                                                <input id="multipleChoiceInput" type="text" class="form-control"
                                                       data-plugin="tokenfield"
                                                       value=""/>
                                            </div>
                                        </div>
                                        <div ng-show="selectedQuestionType === 'multiselect'" class="form-group">
                                            <div class="example">
                                                <input id="multiselectInput" type="text" class="form-control"
                                                       data-plugin="tokenfield"
                                                       value=""/>
                                            </div>
                                        </div>
                                        <!-- End Type Conditionals -->
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <input name="tooltip" type="text" class="form-control" required/>
                                            <label class="floating-label">Tool Tip</label>
                                        </div>
                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                            <label class="control-label">icon</label>
                                            <input name="icon" type="text" id="variable-icon-picker" required/>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary"> Add to Project</button>
                                    </form>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Questions</h3>
                                </div>
                                <div class="panel-body container-fluid">
                                    <div class="example table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Description</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="question in questions track by question.id">
                                                <td> {[{question.name}]}</td>
                                                <td> {[{question.question.substring(0, 25)}]}...</td>
                                                <td class="text-nowrap">
                                                    <button ng-click="handleEditQuestion( question )" type="button"
                                                            class="btn btn-sm btn-icon btn-flat btn-default"
                                                            data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="icon wb-wrench" aria-hidden="true"></i>
                                                    </button>
                                                    <button ng-click="handleDeleteQuestion( question )" type="button"
                                                            class="btn btn-sm btn-icon btn-flat btn-default"
                                                            data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="icon wb-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Forms Column -->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editDomainModal" aria-hidden="false" aria-labelledby="editDomainModalLabel"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
            <form class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="editDomainModalLabel">Edit Domain</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body container-fluid">
                        <form name="domainForm" autocomplete="off" ng-submit="handleCreateDomain()">
                            <h5 class="example-title">Parent Domain</h5>
                            <div class="form-group">
                                <select ng-model="modalDomain.parent" class="form-control">
                                    <option value="#">-- none --</option>
                                    <option ng-repeat="domain in domains track by domain.id"
                                            ng-if="modalDomain.id !== domain.id && modalDomain.id !== domain.parent"
                                            value="{[{domain.id}]}">{[{domain.name}]}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input ng-model="modalDomain.name" type="text" class="form-control"
                                       placeholder="placeholder">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input ng-model="modalDomain.description" type="text" class="form-control"
                                       placeholder="placeholder">
                            </div>
                            <div class="form-group">
                                <label>Tool Tip</label>
                                <input ng-model="modalDomain.tooltip" type="text" class="form-control"
                                       placeholder="placeholder">
                            </div>
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <label class="control-label">icon</label>
                                <input ng-model="modalDomain.icon" type="text" name="icon" id="modal-icon-picker"
                                       required/>
                            </div>
                            <!-- INPUT element -->
                            <button data-dismiss="modal" type="submit" class="btn btn-block btn-primary"> Update
                            </button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="editQuestionModal" aria-hidden="false" aria-labelledby="editQuestionModalLabel"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
            <form class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="editQuestionModalLabel">Edit Question</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body container-fluid">
                        <form name="questionForm" autocomplete="off">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <h5 class="example-title">Parent Domain</h5>
                                    <select ng-model="modalQuestion.parent" name="parent" class="form-control">
                                        <option ng-repeat="domain in domains track by domain.id"
                                                value="{[{domain.id}]}">{[{domain.name}]}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="example-title"> Type </h5>
                                    <select ng-model="modalQuestion.type"
                                            ng-options="type.id as type.name for type in questionTypes"
                                            class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input ng-model="modalQuestion.name" name="name" type="text" class="form-control"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label class="floating-label">The Question</label>
                                <input ng-model="modalQuestion.question" name="question" type="text"
                                       class="form-control"
                                       required/>
                            </div>
                            <!-- Type Conditionals -->
                            <div ng-if="modalQuestion.type === 'number'" class="row">
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Min</label>
                                    <input ng-model="modalQuestion.min" name="min" type="number" class="form-control"
                                           placeholder="Lower Bound"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Max</label>
                                    <input ng-model="modalQuestion.max" name="max" type="number" class="form-control"
                                           placeholder="Upper Bound"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Unit</label>
                                    <input ng-model="modalQuestion.unit" name="unit" type="text" class="form-control"
                                           placeholder="grams, celsius, meters"/>
                                </div>
                            </div>
                            <div ng-if="modalQuestion.type === 'boolean'" class="row">
                                <div class="form-group col-md-6">
                                    <label class="floating-label">True Option</label>
                                    <input ng-model="modalQuestion.trueOption" name="trueOption" type="text"
                                           class="form-control"
                                           placeholder="Yes"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="floating-label">False Option</label>
                                    <input ng-model="modalQuestion.falseOption" name="falseOption" type="text"
                                           class="form-control"
                                           placeholder="No"/>
                                </div>
                            </div>
                            <div ng-if="modalQuestion.type === 'text'" class="form-group">
                                <label class="floating-label">Placeholder</label>
                                <input ng-model="modalQuestion.placeholder" name="placeholder" type="text"
                                       class="form-control"
                                       required/>
                            </div>
                            <div ng-if="modalQuestion.type === 'range'" class="row">
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Min</label>
                                    <input ng-model="modalQuestion.rangeMin" name="rangeMin" type="number"
                                           class="form-control"
                                           placeholder="Lower Bound"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Max</label>
                                    <input ng-model="modalQuestion.rangeMax" name="rangeMax" type="number"
                                           class="form-control"
                                           placeholder="Upper Bound"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="floating-label">Unit</label>
                                    <input ng-model="modalQuestion.rangeUnit" name="rangeUnit" type="text"
                                           class="form-control"
                                           placeholder="degrees"/>
                                </div>
                            </div>
                            <div ng-show="modalQuestion.type === 'select'" class="form-group">
                                <div class="example">
                                    <label class="floating-label">Options</label>
                                    <input id="editMultipleChoiceInput" onchange="updateMultipleChoice()" type="text"
                                           class="form-control" data-plugin="tokenfield" value=""/>
                                </div>
                            </div>
                            <div ng-show="modalQuestion.type === 'multiselect'" class="form-group">
                                <div class="example">
                                    <label class="floating-label">Options</label>
                                    <input id="editMultiselectInput" onchange="updateMultiselect()" type="text"
                                           class="form-control"
                                           data-plugin="tokenfield" value=""/>
                                </div>
                            </div>
                            <!-- End Type Conditionals -->
                            <div class="form-group">
                                <label class="floating-label">Tool Tip</label>
                                <input ng-model="modalQuestion.tooltip" name="tooltip" type="text" class="form-control"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">icon</label>
                                <input ng-model="modalQuestion.icon" name="icon" type="text"
                                       id="variable-editor-icon-picker"
                                       required/>
                            </div>
                            <button data-dismiss="modal" type="submit" class="btn btn-block btn-primary"> Update
                            </button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal -->
</div>
<!-- End Page -->
<?php require 'assets/partials/footer.html'; ?>
<?php require 'assets/partials/js-includes.html'; ?>
<script src="/assets/vendor/bootstrap-sweetalert/sweetalert.js"></script>
<script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
<script src="/assets/vendor/toastr/toastr.js"></script>
<script src="/assets/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>
<script src="/assets/vendor/jstree/jstree.min.js"></script>
<script src="/assets/vendor/fontIconPicker-2.0.0/jquery.fonticonpicker.js"></script>
<script src="/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
<script src="/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="/assets/vendor/multi-select/jquery.multi-select.js"></script>

<script src="/node_modules/angular/angular.min.js"></script>
<script src="/app/project-builder/project-builder.module.js"></script>
<script src="/app/project-builder/project-builder.controller.js"></script>

<script src="/assets/js/Plugin/responsive-tabs.js"></script>
<script src="/assets/js/Plugin/closeable-tabs.js"></script>
<script src="/assets/js/Plugin/tabs.js"></script>
<script src="/assets/js/Plugin/jquery-placeholder.js"></script>
<script src="/assets/js/Plugin/material.js"></script>
<script src="/assets/js/Plugin/toastr.js"></script>
<script src="/assets/js/Plugin/bootstrap-treeview.js"></script>
<script src="/assets/js/Plugin/jstree.js"></script>
<script src="/assets/js/Plugin/bootstrap-tokenfield.js"></script>
<script src="/assets/js/Plugin/bootstrap-select.js"></script>
<script src="/assets/js/Plugin/multi-select.js"></script>
<script src="/assets/examples/js/define-study.js"></script>
<script>
    (function (document, window, $) {
        $(document).ready(function () {
            ApplicationService.renderSession();
        });
    })(document, window, jQuery);
</script>
</body>
</html>