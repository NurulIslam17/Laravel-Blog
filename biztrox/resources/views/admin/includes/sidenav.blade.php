<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li class="menu-title">Blog</li>

                {{--                /Blog  Category--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-pencil"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.category') }}">Add Category</a></li>
                        <li><a href="{{ route('manage.category') }}">Manage Category</a></li>

                    </ul>
                </li>


                {{--               Blog Sub Category--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book-open"></i>
                        <span>Blog Sub Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Add Sub Category</a></li>
                        <li><a href="#">Manage Sub Category</a></li>

                    </ul>
                </li>
                {{--               Blog CRUD--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book-content"></i>
                        <span>Main Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Add Blog</a></li>
                        <li><a href="#">Manage Blog</a></li>

                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
