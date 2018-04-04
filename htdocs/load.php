<?php
require_once ABSPATH . INCLUDES . 'function-debug.php';
require_once ABSPATH . INCLUDES . 'function-print-error-message.php';
require_once ABSPATH . INCLUDES . 'function-is-logged-in.php';
require_once ABSPATH . INCLUDES . 'function-has-page-permission.php';
require_once ABSPATH . INCLUDES . 'function-is-page.php';
require_once ABSPATH . INCLUDES . 'function-page-redirect.php';
require_once ABSPATH . INCLUDES . 'global-db.php';
require_once ABSPATH . INCLUDES . 'class-exception-database.php';
require_once ABSPATH . INCLUDES . 'function-now.php';
require_once ABSPATH . INCLUDES . 'function-query.php';
require_once ABSPATH . INCLUDES . 'interface-model.php';
require_once ABSPATH . INCLUDES . 'class-model-user.php';
require_once ABSPATH . INCLUDES . 'class-model-gradable.php';
require_once ABSPATH . INCLUDES . 'class-model-grade.php';
require_once ABSPATH . INCLUDES . 'class-model-feedback.php';
require_once ABSPATH . INCLUDES . 'class-model-announcement.php';
require_once ABSPATH . INCLUDES . 'class-model-page.php';
require_once ABSPATH . INCLUDES . 'class-model-attachment.php';
require_once ABSPATH . INCLUDES . 'component-meta.php';
require_once ABSPATH . INCLUDES . 'component-header.php';
require_once ABSPATH . INCLUDES . 'component-footer.php';
require_once ABSPATH . INCLUDES . 'component-announcement.php';
require_once ABSPATH . INCLUDES . 'component-attachments.php';
require_once ABSPATH . INCLUDES . 'layout-default.php';
require_once ABSPATH . INCLUDES . 'layout-collection-list.php';
require_once ABSPATH . INCLUDES . 'layout-collection-single.php';

User::create_table();
Gradable::create_table();
Grade::create_table();
Feedback::create_table();
Announcement::create_table();
Page::create_table();
Attachment::create_table();

session_start();

if (is_logged_in() && !has_page_permission($_SESSION['role'])) {
  page_redirect("/index.php") && die();
} else if (!is_logged_in() && !has_page_permission('_public')) {
  page_redirect("/login.php") && die();
}
