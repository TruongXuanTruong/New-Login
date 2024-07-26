<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bảng Điều Khiển</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="backend/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Xuân Trường</strong>
                             </span> <span class="text-muted text-xs block">Giám đốc nghệ thuật <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Hồ Sơ</a></li>
                            <li><a href="contacts.html">Liên Lạc</a></li>
                            <li><a href="mailbox.html">Hộp Thư</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('auth.logout')}}">Đăng Xuất</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        TXT +
                    </div>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Bảng Dữ Liệu</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.html">Dữ liệu v.1</a></li>
                        <li class="active"><a href="dashboard_2.html">Dữ liệu v.2</a></li>
                        <li><a href="dashboard_3.html">Dữ liệu v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dữ liệu v.4</a></li>
                        <li><a href="dashboard_5.html">Dữ liệu v.5 </a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Bố Cục</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Đồ thị</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Biểu đồ flot</a></li>
                        <li><a href="graph_morris.html">Biểu đồ moris</a></li>
                        <li><a href="graph_rickshaw.html">Biểu đồ rickshaw</a></li>
                        <li><a href="graph_chartjs.html">Biểu đồ chartjs</a></li>
                        <li><a href="graph_chartist.html">Biểu đồ chartist</a></li>
                        <li><a href="c3.html">Biểu đồ C3</a></li>
                        <li><a href="graph_peity.html">Biểu đồ peity</a></li>
                        <li><a href="graph_sparkline.html">Biểu đồ sparkline</a></li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Hộp Thư </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Hộp thư đến</a></li>
                        <li><a href="mail_detail.html">Xem email</a></li>
                        <li><a href="mail_compose.html">Soạn email</a></li>
                        <li><a href="email_template.html">Mẫu email</a></li>
                    </ul>
                </li>
                <li>
                    <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Số Liệu</span>  </a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Tiện Ích</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Hình Thức</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="form_basic.html">Hình thức cơ bản</a></li>
                        <li><a href="form_advanced.html">Plugin nâng cao</a></li>
                        <li><a href="form_wizard.html">Thuật sĩ</a></li>
                        <li><a href="form_file_upload.html">Tải lên tệp</a></li>
                        <li><a href="form_editors.html">Trình soạn thảo văn bản</a></li>
                        <li><a href="form_autocomplete.html">Tự động hoàn thành</a></li>
                        <li><a href="form_markdown.html">Giảm giá</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Lượt Xem</span>  <span class="pull-right label label-primary">ĐẶC BIỆT</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="contacts.html">Liên lạc</a></li>
                        <li><a href="profile.html">Hồ sơ</a></li>
                        <li><a href="profile_2.html">Hồ sơ v.2</a></li>
                        <li><a href="contacts_2.html">Liên lạc v.2</a></li>
                        <li><a href="projects.html">Dự án</a></li>
                        <li><a href="project_detail.html">Chi tiết dự án</a></li>
                        <li><a href="activity_stream.html">Luồng hoạt động</a></li>
                        <li><a href="teams_board.html">Bảng đội</a></li>
                        <li><a href="social_feed.html">Nguồn cấp dữ liệu xã hội</a></li>
                        <li><a href="clients.html">Khách hàng</a></li>
                        <li><a href="full_height.html">Chế độ xem</a></li>
                        <li><a href="vote_list.html">Danh sách bình chọn</a></li>
                        <li><a href="file_manager.html">Quản lý tập tin</a></li>
                        <li><a href="calendar.html">Lịch</a></li>
                        <li><a href="issue_tracker.html">Người tìm bệnh</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="article.html">Bài báo</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="timeline.html">Mốc thời gian</a></li>
                        <li><a href="pin_board.html">Bảng ghim</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Những Trang Khác</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="search_results.html">Kết quả tìm kiếm</a></li>
                        <li><a href="lockscreen.html">Màn hình khóa</a></li>
                        <li><a href="invoice.html">Hóa đơn</a></li>
                        <li><a href="login.html">Đăng nhập</a></li>
                        <li><a href="login_two_columns.html">Đăng nhập v.2</a></li>
                        <li><a href="forgot_password.html">Quên mật khẩu</a></li>
                        <li><a href="register.html">Đăng ký</a></li>
                        <li><a href="404.html">Trang 404 </a></li>
                        <li><a href="500.html">Trang 500</a></li>
                        <li><a href="empty_page.html">Trang trống</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Điều Khoản Khác</span><span class="label label-info pull-right">MỚI</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="toastr_notifications.html">Thông báo</a></li>
                        <li><a href="nestable_list.html">Danh sách lồng nhau</a></li>
                        <li><a href="agile_board.html">Bảng linh hoạt</a></li>
                        <li><a href="timeline_2.html">Mốc thời gian v.2</a></li>
                        <li><a href="diff.html">Khác biệt</a></li>
                        <li><a href="pdf_viewer.html">Trình xem PDF</a></li>
                        <li><a href="i18support.html">Hỗ trợ i18</a></li>
                        <li><a href="sweetalert.html">Cảnh báo</a></li>
                        <li><a href="idle_timer.html">Nhàn hạ</a></li>
                        <li><a href="truncate.html">Bún chả</a></li>
                        <li><a href="password_meter.html">Bún đậu</a></li>
                        <li><a href="spinners.html">Spiderman</a></li>
                        <li><a href="spinners_usage.html">Ironman</a></li>
                        <li><a href="tinycon.html">Batman</a></li>
                        <li><a href="google_maps.html">Google maps</a></li>
                        <li><a href="datamaps.html">Trường</a></li>
                        <li><a href="social_buttons.html">Trường</a></li>
                        <li><a href="code_editor.html">Trường</a></li>
                        <li><a href="modal_window.html">Trường</a></li>
                        <li><a href="clipboard.html">Trường</a></li>
                        <li><a href="text_spinners.html">Trường</a></li>
                        <li><a href="forum_main.html">Trường</a></li>
                        <li><a href="validation.html">Trường</a></li>
                        <li><a href="tree_view.html">Trường</a></li>
                        <li><a href="loading_buttons.html">Trường</a></li>
                        <li><a href="chat_view.html">Trường</a></li>
                        <li><a href="masonry.html">Trường</a></li>
                        <li><a href="tour.html">Trường</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Các Giao Diện</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="typography.html">Trường</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="draggable_panels.html">Trường</a></li>
                        <li><a href="resizeable_panels.html">Trường</a></li>
                        <li><a href="buttons.html">Trường</a></li>Trường
                        <li><a href="video.html">Trường</a></li>
                        <li><a href="tabs_panels.html">Trường</a></li>
                        <li><a href="tabs.html">Trường</a></li>
                        <li><a href="notifications.html">Trường</a></li>
                        <li><a href="helper_classes.html">Trường</a></li>
                        <li><a href="badges_labels.html">Trường</a></li>
                    </ul>
                </li>

                <li>
                    <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Tùy Chọn Lưới</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Bảng</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="table_basic.html">Bảng tĩnh</a></li>
                        <li><a href="table_data_tables.html">Bảng dữ liệu</a></li>
                        <li><a href="table_foo_table.html">Bảng Foo</a></li>
                        <li><a href="jq_grid.html">Bảng Grid</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Thương Mại Điện Tử</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="ecommerce_products_grid.html">Lưới sản phẩm</a></li>
                        <li><a href="ecommerce_product_list.html">Danh sách sản phẩm</a></li>
                        <li><a href="ecommerce_product.html">Chỉnh sửa sản phẩm</a></li>
                        <li><a href="ecommerce_product_detail.html">Chi tiết sản phẩm</a></li>
                        <li><a href="ecommerce-cart.html">Giỏ hàng</a></li>
                        <li><a href="ecommerce-orders.html">Đơn đặt hàng</a></li>
                        <li><a href="ecommerce_payments.html">Mẫu thẻ tín dụng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Ảnh</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="basic_gallery.html">Ảnh Lightbox </a></li>
                        <li><a href="slick_carousel.html"> Ảnh Slick</a></li>
                        <li><a href="carousel.html">Bootstrap Carousel</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Cấp Độ <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Cấp độ 1</a>
                                </li>
                                <li>
                                    <a href="#">Cấp độ 2</a>
                                </li>
                                <li>
                                    <a href="#">Cấp độ 3</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Vật phẩm cấp 1</a></li>
                        <li>
                            <a href="#">Vật phẩm cấp 2</a></li>
                        <li>
                            <a href="#">Vật phẩm cấp 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://github.com/TruongXuanTruong"><i class="fa fa-magic"></i> <span class="nav-label">CSS Xuân Trường </span><span class="label label-info pull-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Trang Đích</span> <span class="label label-warning pull-right">MỚI</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Bưu Kiện</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to TXT +</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="backend/img/a6.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">46 giờ trước</small>
                                    <strong>Ngân</strong> đã bắt đầu theo dõi <strong>Xuân Trường</strong>. <br>
                                    <small class="text-muted">3 ngày trước lúc 19:58 - 17.17.2024</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="backend/img/a4.jpg">
                                </a>
                                <div>
                                    <small class="pull-right text-navy">5 giờ trước</small>
                                    <strong>Ironman</strong> đã bắt đầu theo dõi <strong>Xuân Trường</strong>. <br>
                                    <small class="text-muted">Hôm nay 13:21 phút - 20.07.2024</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="backend/img/profile.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">Bây giờ</small>
                                    <strong>Phúc</strong> đã yêu thích video của <strong>Quý</strong>. <br>
                                    <small class="text-muted">Bây giờ 20:30 phút - 20.07.2024</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Đọc Tất Cả Tin Nhắn</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Bạn có 16 tin nhắn
                                    <span class="pull-right text-muted small">4 phút trước</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 lượt theo dõi mới
                                    <span class="pull-right text-muted small">12 phút trước</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Máy chủ đã được khởi động lại
                                    <span class="pull-right text-muted small">4 phút trước</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>Xem Tất Cả Thông Báo</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{route('auth.logout')}}">
                        <i class="fa fa-sign-out"></i> Đăng Xuất
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Hàng tháng</span>
                                <h5>Thu nhập</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40,886,200$</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Tổng thu nhập</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Hàng năm</span>
                                <h5>Đơn đặt hàng</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Đơn hàng mới</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Hôm nay</span>
                                <h5>Lượt truy cập</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>Số lượt truy cập mới</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Giá trị thấp</span>
                                <h5>Hoạt động người dùng</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>Trong tháng đầu tiên</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Đơn đặt hàng</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Hôm nay</button>
                                        <button type="button" class="btn btn-xs btn-white">Hàng tháng</button>
                                        <button type="button" class="btn btn-xs btn-white">Hàng năm</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">2,346</h2>
                                            <small>Tổng số đơn hàng trong kỳ</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Tổng số đơn hàng trong tháng</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Thu nhập hàng tháng từ đơn hàng</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Tin nhắn</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content ibox-heading">
                                <h3><i class="fa fa-envelope-o"></i> Tin nhắn mới</h3>
                                <small><i class="fa fa-tim"></i>Bạn có 22 tin nhắn mới và 16 tin nhắn đang chờ trong thư mục nháp.</small>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right text-navy">1 phút trước</small>
                                            <strong>Ngân</strong>
                                            <div>Tin nhắn chưa đọc !</div>
                                            <small class="text-muted">Hôm nay 5:60 phút - 21.07.2024</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">2 phút trước</small>
                                            <strong>Long</strong>
                                            <div>Tin nhắn chưa đọc !</div>
                                            <small class="text-muted">Hôm nay 2:23 phút - 21.07.2024</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5 giờ trước ago</small>
                                            <strong>Nam</strong>
                                            <div>Tin nhắn chưa đọc !</div>
                                            <small class="text-muted">Hôm qua 23:59 giờ - 20.07.2024</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">15 giờ trước</small>
                                            <strong>Chiểu</strong>
                                            <div>Tin nhắn chưa đọc ! </div>
                                            <small class="text-muted">Hôm kia 8:48 phút - 19.07.2024</small>
                                        </div>
                                    </div>


                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">15 giờ trước</small>
                                            <strong>Hoàng Anh</strong>
                                            <div>Tin nhắn chưa đọc ! </div>
                                            <small class="text-muted">Hôm kia 8:48 pm - 19.07.2024</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">15 giờ trước</small>
                                            <strong>Trần Đại</strong>
                                            <div>Tin nhắn chưa đọc ! </div>
                                            <small class="text-muted">Hôm kia 8:48 phút - 19.07.2024</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">16 giờ trước</small>
                                            <strong>Mai</strong>
                                            <div>Tin nhắn chưa đọc !</div>
                                            <small class="text-muted">Hôm kia 8:48 phút - 19.07.2024</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Danh sách dự án người dùng</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>Trạng thái</th>
                                                <th>Ngày</th>
                                                <th>Người dùng</th>
                                                <th>Giá trị</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><small>Chưa giải quyết...</small></td>
                                                <td><i class="fa fa-clock-o"></i> 11:20 phút</td>
                                                <td>Sâm</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Đã hủy</span> </td>
                                                <td><i class="fa fa-clock-o"></i> 10:40 phút</td>
                                                <td>Hai</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Chưa giải quyết...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 01:30 phút</td>
                                                <td>Phúc</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Chưa giải quyết...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 02:20 phút</td>
                                                <td>Giang</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Chưa giải quyết...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 09:40 phút</td>
                                                <td>Linh</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-primary">Hoàn thành</span> </td>
                                                <td><i class="fa fa-clock-o"></i> 04:10 phút</td>
                                                <td>Diệu</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Chưa giải quyết...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 12:08 phút</td>
                                                <td>Đức</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Danh sách việc cần làm nhỏ</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <ul class="todo-list m-t small-list">
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Mua sữa</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Đi đến cửa hàng và tìm thấy một số sản phẩm.</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Gửi tài liệu cho Ngân</span>
                                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 phút</small>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Đến gặp bác sĩ bác sĩ Trang</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Lên kế hoạch kỳ nghỉ</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Tạo nội dung mới</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Gọi Ngân đi ăn tối</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Giao dịch trên toàn thế giới</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <table class="table table-hover margin bottom">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 1%" class="text-center">STT</th>
                                                        <th>Giao dịch</th>
                                                        <th class="text-center">Ngày</th>
                                                        <th class="text-center">Số lượng</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td> Sâm
                                                            </td>
                                                        <td class="text-center small">16 06 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$483.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td> Tivi
                                                        </td>
                                                        <td class="text-center small">10 06 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$327.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td> Bộ dụng cụ
                                                        </td>
                                                        <td class="text-center small">12 06 2014</td>
                                                        <td class="text-center"><span class="label label-warning">$125.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td> Hình ảnh toàn cảnh</td>
                                                        <td class="text-center small">22 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Điện thoại</td>
                                                        <td class="text-center small">24 06 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td>Màn hình</td>
                                                        <td class="text-center small">26 06 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="world-map" style="height: 300px;"></div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Xuân Trường &copy; 2024-2025
            </div>
        </div>
        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active"><a data-toggle="tab" href="#tab-1">
                        Ghi chú
                    </a></li>
                    <li><a data-toggle="tab" href="#tab-2">
                        Dự án
                    </a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Tin nhắn mới nhất</h3>
                            <small><i class="fa fa-tim"></i> Bạn có 10 tin nhắn mới.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a6.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        Tôi có thể làm quen bạn được không ?
                                        <br>
                                        <small class="text-muted">Hôm nay 4:21 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        Nay bạn ăn gì ?
                                        <br>
                                        <small class="text-muted">Hôm kia 18:45 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Tiến triển qua nhiều năm, đôi khi do vô tình, đôi khi có mục đích (thêm sự hài hước và những thứ tương tự).
                                        <br>
                                        <small class="text-muted">Hôm kia 11:10 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Bạn đang làm gì thế ?
                                        <br>
                                        <small class="text-muted">Thứ 2 8:37 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        Triển khai dự án luôn
                                        <br>
                                        <small class="text-muted">Hôm nay 16:21 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Đây là tài liệu bạn cần.
                                        <br>
                                        <small class="text-muted">Hôm qua 7:45 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a6.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Bạn hài hước thật
                                        <br>
                                        <small class="text-muted">Hôm qua 13:10 phút</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="backend/img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Khám phá nhiều trang web vẫn còn ở giai đoạn sơ khai. Có nhiều phiên bản khác nhau.
                                        <br>
                                        <small class="text-muted">Thứ 2 8:37 phút</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Dự án mới nhất</h3>
                            <small><i class="fa fa-tim"></i> Bạn có 14 dự án. 10 chưa hoàn thành</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 giờ trước</div>
                                    <h4>Định giá doanh nghiệp</h4>
                                    Cần hoàn thành vào ngày hôm nay

                                    <div class="small">Hoàn thành với: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Kết thúc dự án: 14:00 pm - 21.07.2024</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 giờ trước</div>
                                    <h4>Hợp đồng với Công ty </h4>
                                    Cần hoàn thành

                                    <div class="small">Hoàn thành với: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">Bây giờ</div>
                                    <h4>Gặp gỡ Chủ tịch</h4>
                                    Đang trong tiến trình

                                    <div class="small">Hoàn thành với: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">MỚI</span>
                                    <h4>Việc tạo ra</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                    Cần xong ngày hôm nay
                                    <div class="small">Hoàn thành với: 22%</div>
                                    <div class="small text-muted m-t-xs">Kết thúc dự án: 14:00 pm - 22.07.2024</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 giờ trước</div>
                                    <h4>Định giá sản phẩm</h4>
                                    Cần xong ngày mai

                                    <div class="small">Hoàn thành với: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Kết thúc dự án: 14:00 pm - 22.07.2024</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 giờ trước</div>
                                    <h4>Hợp đồng với Công ty </h4>
                                    Đang trong tiến trình

                                    <div class="small">Hoàn thành với: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 giờ trước</div>
                                    <h4>Meeting</h4>
                                    Cần hoàn thành hôm nay

                                    <div class="small">Hoàn thành với: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">MỚI</span>
                                    <h4>Việc tạo ra</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                    Đang trong tiến trình.
                                    <div class="small">Hoàn thành với: 22%</div>
                                    <div class="small text-muted m-t-xs">Kết thúc dự án: 14:00 pm - 22.07.2024</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> Bạn có 14 dự án. 10 chưa hoàn thành</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Hiển thị thông báo
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Tắt trò chuyện
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Bật lịch sử
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Hiển thị biểu đồ
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Người dùng ngoại tuyến
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Tìm kiếm toàn cầu
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Cập nhật hàng ngày
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-content">
                            <h4>Cài đặt</h4>
                            <div class="small">
                                Phát triển toàn diện.
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="backend/js/jquery-3.1.1.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="backend/js/plugins/flot/jquery.flot.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="backend/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="backend/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="backend/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="backend/js/inspinia.js"></script>
    <script src="backend/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="backend/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="backend/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="backend/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="backend/js/demo/sparkline-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>
</html>
