<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Masum</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
       
           <li class="nav-item">
            <a href="{{route('post-category.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Post Category</p>
            </a>

          </li>

           <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Post</p>
            </a>

          </li>
       

          <li class="nav-item">
            <a href="{{route('service-category.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Service Category</p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Service</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{route('service-details.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Service Details</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{route('course-category.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Course Category</p>
            </a>

          </li>
            <li class="nav-item">
            <a href="{{route('course.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Course</p>
            </a>

          </li>
              <li class="nav-item">
            <a href="{{route('course-details.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Course Detalis</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('event.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Event</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('author.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Author</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('team.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('erp.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Erp</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('job-opportunity.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Job Opportunity</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('curriculum.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Curriculumr</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>