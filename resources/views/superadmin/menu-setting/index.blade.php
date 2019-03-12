@extends('common.default')
@section('title')
    <title>菜单配置</title>
@stop
@section('body')
    <div class="col-lg-6">

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Basic Tree
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div id="m_tree_1" class="tree-demo">
                    <ul>
                        <li>
                            Root node 1
                            <ul>
                                <li data-jstree='{ "selected" : true }'>
                                    <a href="javascript:;">
                                        Initially selected </a>
                                </li>
                                <li data-jstree='{ "icon" : "fa fa-briefcase m--font-success " }'>
                                    custom icon URL
                                </li>
                                <li data-jstree='{ "opened" : true }'>
                                    initially open
                                    <ul>
                                        <li data-jstree='{ "disabled" : true }'>
                                            Disabled Node
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'>
                                            Another node
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{ "icon" : "fa fa-warning m--font-danger" }'>
                                    Custom icon class (bootstrap)
                                </li>
                            </ul>
                        </li>
                        <li data-jstree='{ "type" : "file" }'>
                            <a href="http://www.keenthemes.com">
                                Clickanle link node </a>
                        </li>
                    </ul>
                </div>
                <div class="alert alert-success m--margin-top-10">
                    Note! Opened and selected nodes will be saved in the user's browser, so when returning to the same tree the previous state will be restored.
                </div>
            </div>
        </div>

        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Custom Icons & Clickable Nodes
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div id="m_tree_2" class="tree-demo">
                    <ul>
                        <li>
                            Root node 1
                            <ul>
                                <li data-jstree='{ "selected" : true }'>
                                    <a href="javascript:;">
                                        Initially selected </a>
                                </li>
                                <li data-jstree='{ "icon" : "fa fa-briefcase m--font-success " }'>
                                    custom icon URL
                                </li>
                                <li data-jstree='{ "opened" : true }'>
                                    initially open
                                    <ul>
                                        <li data-jstree='{ "disabled" : true }'>
                                            Disabled Node
                                        </li>
                                        <li data-jstree='{ "type" : "file" }'>
                                            Another node
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{ "icon" : "fa fa-warning m--font-danger" }'>
                                    Custom icon class (bootstrap)
                                </li>
                            </ul>
                        </li>
                        <li data-jstree='{ "type" : "file" }'>
                            <a href="http://www.jstree.com">
                                Clickanle link node </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Checkable Tree
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div id="m_tree_3" class="tree-demo">
                </div>
            </div>
        </div>

        <!--end::Portlet-->
    </div>
@stop
@section('endscript')
    @parent
    <script src="{{ asset('assets/demo/custom/components/base/treeview.js') }}" type="text/javascript"></script>

@stop
