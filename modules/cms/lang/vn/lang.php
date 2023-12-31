<?php return [
  'cms_object' => [
    'invalid_file' => 'Tên tệp không hợp lệ :name. Tên tệp có thể chứa chỉ các ký tự chữ và số, dấu gạch dưới, dấu gạch ngang và dấu chấm. Ví dụ: page.htm, page, subdirectory/page',
    'invalid_property' => 'Khổng thể cài thuộc tính \':name\'',
    'file_already_exists' => 'Tệp tin \':name\' đã tồn tại.',
    'error_saving' => 'Lỗi lưu file \':name\'. Vui lòng kiểm tra write permission.',
    'error_creating_directory' => 'Không thể tạo thư mục :name. Vui lòng kiểm tra write permission.',
    'invalid_file_extension' => 'Extension không hợp lệ: :invalid. Extensions hợp lệ: :allowed.',
    'error_deleting' => 'Không thể xóa template file \':name\'. Vui lòng kiểm tra write permission.',
    'delete_success' => 'Đã xóa template: :count.',
    'file_name_required' => 'Tên file là bắt buộc.',
    'safe_mode_enabled' => 'Safe mode đã được bật.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Giao diện web',
      'online' => 'Trực tuyến',
      'maintenance' => 'Đang bảo trì',
      'manage_themes' => 'Quản lý giao diện',
      'customize_theme' => 'Tùy chỉnh giao diện',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Giao diện đang kích hoạt chưa được cài đặt.',
      'not_found' => 'Không tìm thấy giao diện đang kích hoạt.',
    ],
    'edit' => [
      'not_set' => 'Giao diện chưa được cài đặt.',
      'not_found' => 'Không tìm thấy giao diện.',
      'not_match' => 'Giao diện này đang trong chế độ chỉnh sửa. Vui lòng tải lại trang',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'Trang \':name\' không tồn tại',
    'not_found' => [
      'label' => 'Trang không tồn tại',
      'help' => 'Không tìm thấy trang bạn yêu cầu.',
    ],
    'custom_error' => [
      'label' => 'Lỗi trang',
      'help' => 'Có lỗi xảy ra khiến trang này không thể hiển thị',
    ],
    'menu_label' => 'Danh sách trang',
    'unsaved_label' => 'Trang chưa được lưu',
    'no_list_records' => 'Không tìm thấy trang',
    'new' => 'Trang mới',
    'invalid_url' => 'Định dạng URL không hợp lệ. URL phải bắt đầu bằng biểu tượng dấu gạch chéo và có thể chứa chữ số, chữ cái Latinh và ký hiệu sau đây: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Xóa các trang đang chọn?',
    'delete_confirm_single' => 'Xóa trang này?',
    'no_layout' => '-- Không chọn --',
    'title' => 'Tiêu đề trang',
    'url' => 'URL trang',
    'file_name' => 'Tên file của trang',
  ],
  'layout' => [
    'not_found_name' => 'Mẫu giao diện \':name\' không tìm thấy',
    'menu_label' => 'Các mẫu',
    'unsaved_label' => 'Mẫu giao diện chưa được lưu',
    'no_list_records' => 'Không tìm thấy mẫu giao diện nào',
    'new' => 'Mẫu giao diện mới',
    'delete_confirm_multiple' => 'Xóa các mẫu giao diện đã chọn?',
    'delete_confirm_single' => 'Xóa mẫu giao diện này?',
  ],
  'partial' => [
    'not_found_name' => 'Không tìm thấy partial \':name\'.',
    'invalid_name' => 'Partial không hợp lệ: :name.',
    'menu_label' => 'Partials',
    'unsaved_label' => 'Chưa lưu partial(s)',
    'no_list_records' => 'Không tìm thấy partial nào',
    'delete_confirm_multiple' => 'Xóa các Partital đã chọn?',
    'delete_confirm_single' => 'Xóa partial này?',
    'new' => 'Partital mới',
  ],
  'content' => [
    'not_found_name' => 'Không tìm thấy tệp tin nội dung \':name\'.',
    'menu_label' => 'Nội dung',
    'unsaved_label' => 'Chưa lưu nội dung',
    'no_list_records' => 'Không tìm thấy tệp tin nội dung nào',
    'delete_confirm_multiple' => 'Xóa các tệp tin nội dung hoặc đường dẫn đã chọn?',
    'delete_confirm_single' => 'Xóa tệp tin nội dung này?',
    'new' => 'Tẹo tệp mới',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Tên AJAX handler không hợp lệ: :name.',
    'not_found' => 'Không tìm thấy AJAX handler \':name\'',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Thêm mới',
    'search' => 'Tìm kiếm...',
  ],
  'editor' => [
    'settings' => 'Cài đặt',
    'title' => 'Tiêu đề',
    'new_title' => 'Tiêu đề trang',
    'url' => 'URL',
    'filename' => 'Tên file',
    'layout' => 'Giao diện mẫu',
    'description' => 'Mô tả',
    'preview' => 'Xem trước',
    'meta' => 'Meta',
    'meta_title' => 'Meta Title',
    'meta_description' => 'Meta Description',
    'markup' => 'Markup',
    'code' => 'Code',
    'content' => 'Nội dung',
    'hidden' => 'Ẩn',
    'hidden_comment' => 'Ẩn trang này, và chỉ hiển thị đối với những người đã đăng nhập trang quản trị',
    'enter_fullscreen' => 'Toàn màn hình',
    'exit_fullscreen' => 'Thoát toàn màn hình',
    'open_searchbox' => 'Mở hộp tìm kiếm',
    'open_replacebox' => 'Mở hộp Replace',
  ],
  'asset' => [
    'menu_label' => 'Assets',
    'unsaved_label' => 'Chưa lưu asset(s)',
    'drop_down_add_title' => 'Thêm mới...',
    'drop_down_operation_title' => 'Hành động...',
    'upload_files' => 'Upload file(s)',
    'create_file' => 'Tạo mới file',
    'create_directory' => 'Tạo mới thư mục',
    'directory_popup_title' => 'Thư mục mới',
    'directory_name' => 'Tên thư mục',
    'rename' => 'Đổi tên',
    'delete' => 'Xóa',
    'move' => 'Di chuyển ra chỗ khác',
    'select' => 'Lựa chọn',
    'new' => 'Tệp mới',
    'rename_popup_title' => 'Đổi tên',
    'rename_new_name' => 'Tên mới',
    'invalid_path' => 'Đường dẫn chỉ có thể chứa chữ số, chữ cái Latinh, dấu cách và các ký hiệu sau đây: ._-/',
    'error_deleting_file' => 'Lỗi xóa tệp tin :name.',
    'error_deleting_dir_not_empty' => 'Lỗi xóa thư mục :name. Thư mục phải trống mới xóa được.',
    'error_deleting_dir' => 'Lỗi xóa thư mục :name.',
    'invalid_name' => 'Tên chỉ có thể chứa chữ số, chữ cái Latinh, dấu cách và các ký hiệu sau đây: ._-',
    'original_not_found' => 'Tệp gốc hoặc đường dẫn không tồn tại',
    'already_exists' => 'Tên tệp tin hoặc đường dẫn đã tồn tại',
    'error_renaming' => 'Lỗi sửa tên tệp tin hoặc thư mục',
    'name_cant_be_empty' => 'Tên không được để trống',
    'too_large' => 'Kích thước tệp tin quá lớn. Kích thước tệp tin không được vượt quá :max_size',
    'type_not_allowed' => 'Chỉ chấp nhận các loại tệp tin sau: :allowed_types',
    'file_not_valid' => 'File không hợp lệ',
    'error_uploading_file' => 'Lỗi upload tệp tin \':name\': :error',
    'move_please_select' => 'Vui lòng chọn',
    'move_destination' => 'Thư mục cần chuyển đến',
    'move_popup_title' => 'Di chuyển assets',
    'move_button' => 'Di chuyển',
    'selected_files_not_found' => 'Không tìm thấy tệp tin đã chọn',
    'select_destination_dir' => 'Vui lòng chọn thư mục cần di chuyển đến',
    'destination_not_found' => 'Thư mục cần chuyển đến không tồn tại',
    'error_moving_file' => 'Lỗi di chuyển tệp tin :file',
    'error_moving_directory' => 'Lỗi di chuyển thư mục :dir',
    'error_deleting_directory' => 'Lỗi xóa thư mục gốc :dir',
    'no_list_records' => 'Không tìm thấy tệp tin nào',
    'delete_confirm' => 'Xóa các tệp tin hoặc thư mục đã chọn?',
    'path' => 'Path',
  ],
  'component' => [
    'menu_label' => 'Components',
    'invalid_request' => 'Không thể lưu template vì chứa component không hợp lệ.',
    'no_records' => 'Không tìm thấy components nào',
    'not_found' => 'Component \':name\' không tồn tại.',
    'method_not_found' => 'Component \':name\' không có method \':method\'.',
  ],
  'template' => [
    'invalid_type' => 'Không xác định được định dạng template.',
    'not_found' => 'Không tìm thấy Template.',
    'saved' => 'Đã lưu template.',
    'no_list_records' => 'Không có kết quả',
    'delete_confirm' => 'Xóa các template đã chọn?',
    'order_by' => 'Order by',
  ],
  'permissions' => [
    'name' => 'CMS',
    'manage_content' => 'Quản lý các tệp content của website',
    'manage_assets' => 'Quản lý các thư mục và tệp assets - images, JavaScript files, CSS',
    'manage_pages' => 'Tạo mới, chỉnh sửa và xóa các trang của website',
    'manage_layouts' => 'Tạo mới, chỉnh sửa và xóa các CMS layout',
    'manage_partials' => 'Tạo mới, chỉnh sửa và xóa các CMS partial',
    'manage_themes' => 'Kích hoạt, bỏ kích hoạt và cấu hình CMS theme',
    'manage_theme_options' => 'Lựa chọn các cấu hình tùy chỉnh cho theme đang được kích hoạt',
  ],
  'theme_log' => [
    'hint' => 'Bản ghi những thay đổi của giao diện được thực hiện trong trang quản trị',
    'menu_label' => 'Nhật ký giao diện',
    'menu_description' => 'Xem những thay đổi của giao diện đang được kích hoạt.',
    'empty_link' => 'Xóa hết nhật ký về thay đổi giao diện',
    'empty_loading' => 'Đang xóa nhật ký giao diện...',
    'empty_success' => 'Đã xóa hết nhật ký',
    'return_link' => 'Quay lại trang nhật ký giao diện',
    'id' => 'ID',
    'id_label' => 'Log ID',
    'created_at' => 'Thời gian',
    'user' => 'Người dùng',
    'type' => 'Loại',
    'type_create' => 'Ngày tạo',
    'type_update' => 'Ngày cập nhật',
    'type_delete' => 'Ngày xóa',
    'theme_name' => 'Giao diện',
    'theme_code' => 'Mã giao diện',
    'old_template' => 'Giao diện mẫu (Cũ)',
    'new_template' => 'Giao diện mẫu (Mới)',
    'template' => 'Giao diện mẫu',
    'diff' => 'Thay đổi',
    'old_value' => 'Giá trị cũ',
    'new_value' => 'Giá trị mới',
    'preview_title' => 'Thay đổi giao diện mẫu',
    'template_updated' => 'Giao diện mẫu đã được cập nhật',
    'template_created' => 'Giao diện mẫu đã được tạo',
    'template_deleted' => 'Giao diện mẫu đã xóa',
  ],
];
