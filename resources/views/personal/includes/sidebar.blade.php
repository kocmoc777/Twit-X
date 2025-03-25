<aside class="main-sidebar sidebar-dark-primary elevation-4">



    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('main.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-table-list"></i>
                    <p>
                        Стрічка постів
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Головна
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="nav-icon fa-regular fa-heart"></i>
                    <p>
                        Вподобані пости
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="nav-icon fa-regular fa-comment"></i>
                    <p>
                        Коментарі
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.post.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-plus"></i>
                    <p>
                        Створення поста
                    </p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
