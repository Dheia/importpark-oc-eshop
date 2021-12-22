<?php return [
    'plugin' => [
        'name' => 'eShop',
        'description' => 'A plugin for e-commerce and inventory management system.',
    ],
    'product' => [
        'id' => 'ID',
        'title' => 'Title',
        'slug' => 'Slug',
        'photos' => 'Photos',
        'tab_basic' => 'Basic',
        'short_description' => 'Short Description',
        'description' => 'Description',
        'tab_category' => 'Category',
        'select_categories' => 'Select Categories',
        'price' => 'Price',
        'tab_price' => 'Price',
        'discount' => 'Discount',
        'discount_type' => 'Discount Type',
        'video_url' => 'Video url',
        'discount_start' => 'Discount Start Date Time',
        'discount_end' => 'Discount End Date Time',
        'brand' => 'Brand',
        'tab_others' => 'Others',
        'product_type' => 'Product Type',
        'external_download_link' => 'External Download Link',
        'download_from_site' => 'Download From Site',
        'weight' => 'Weight',
        'unit' => 'Unit',
        'set_color_variation' => 'Set Color Variation',
        'select_color_variation' => 'Select Color Variation',
        'add_new_color_variation' => 'Add New Color Variation',
        'color_variation_comment' => 'Set Price If Color Variation has different price.',
        'set_size_variation' => 'Set Size Variation',
        'add_new_size_variation' => 'Add New Size Variation',
        'size_label' => 'Size Label',
        'color_label' => 'Color Label',
        'size_variation_comment' => 'Set Price If Size Variation has different price.',
        'is_published' => 'Is Published?',
        'is_featured' => 'Is Featured?',
        'published_at' => 'Published at',
        'tab_seo' => 'SEO',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'delete_success' => 'Delete Success',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'page_view' => 'Page View',
        'view' => 'View',
        'type' => 'Type',
        'created_by' => 'Created by',
        'select_a_brand' => 'Select a Brand',
        'select_a_unit' => 'Select a Unit',
        'published_validation' => 'Please select a published date',
    ],
    'categories' => [
        'list_title' => 'Manage the blog categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized'
    ],
    'category' => [
        'id' => 'ID',
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'description' => 'Description',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'products' => 'Products',
        'delete_confirm' => 'Delete this category?',
        'delete_success' => 'Successfully deleted those categories.',
        'return_to_categories' => 'Return to the blog category list',
        'reorder' => 'Reorder Categories',
        'photo' => 'Photo',
        'details' => 'Details',
        'tab_seo' => 'SEO',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'product_count' => 'Product Count',
        'is_featured' => 'Is Featured?',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'permission' => [
        'manage_products' => 'Manage Products',
        'access_publish' => 'Access Publish',
        'access_other_products' => 'Access Other Products',
        'manage_categories' => 'Manage Categories',
        'manage_brands' => 'Manage Brands',
        'manage_orders' => 'Manage Orders',
        'manage_order_statuses' => 'Manage Order Statuses',
        'manage_basic_settings' => 'Manage Basic Settings',
        'manage_units' => 'Manage Units',
        'manage_currencies' => 'Manage Currencies',
        'manage_shipping_methods' => 'Manage Shipping Methods',
        'manage_payment_methods' => 'Manage Payment Methods',
    ],
    'brand' => [
        'id' => 'Id',
        'name' => 'Name',
        'slug' => 'Slug',
        'description' => 'Description',
        'status' => 'Status',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'logo' => 'Logo',
        'sort_order' => 'Sort Order',
    ],
    'unit' => [
        'name' => 'Name',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'currency' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'symbol' => 'Symbol',
        'sort_order' => 'Sort Order',
        'is_active' => 'Is Active?',
        'is_default' => 'Is Default?',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'order_status' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'color' => 'Color',
        'sort_order' => 'Sort Order',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'select_status' => 'Select order status',
        'select_mail_template' => 'Select mail template',
    ],
    'payment_method' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'sort_order' => 'Sort Order',
        'is_active' => 'Is Active?',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'shipping_method' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'price' => 'Price',
        'sort_order' => 'Sort Order',
        'is_active' => 'Is Active?',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'menu' => [
        'products' => 'Products',
        'categories' => 'Categories',
        'brands' => 'Brands',
    ],
    'menuitem' => [
        'shop_category' => 'Shop Category',
        'all_shop_categories' => 'All Shop Categories',
        'shop_product' => 'Shop Product',
        'all_shop_products' => 'All Shop Products',
        'category_shop_products' => 'Category Shop Products',
    ],
    'sorting' => [
        'title_asc' => 'Title (ascending)',
        'title_desc' => 'Title (descending)',
        'created_asc' => 'Created (ascending)',
        'created_desc' => 'Created (descending)',
        'updated_asc' => 'Updated (ascending)',
        'updated_desc' => 'Updated (descending)',
        'published_asc' => 'Published (ascending)',
        'published_desc' => 'Published (descending)',
        'random' => 'Random'
    ],
    'cart' => [
        'successfully_added_to_cart' => 'Successfully added to cart',
        'item_removed_from_cart' => 'Item removed from cart',
        'item_quantity_successfully_updated' => 'Item quantity successfully updated',
    ],
    'settings' => [
        'eshop' => 'Basic Settings',
        'eshop_description' => 'Manage basic settings for eShop.',
        'tab_eshop' => 'eShop Settings',
        'tab_basic_settings' => 'Basic Settings',
        'currencies' => 'Currencies',
        'currency_description' => 'Manage currencies for product & orders.',
        'units' => 'Units',
        'units_description' => 'Manage Units for products.',
        'payment_methods' => 'Payment Methods',
        'payment_methods_description' => 'Manage Payment Methods for orders.',
        'shipping_methods' => 'Shipping Method',
        'shipping_methods_description' => 'Manage Shipping Methods for orders.',
        'order_status' => 'Order Status',
        'order_statuses_description' => 'Manage Order Statuses for orders.',
        'want_to_show_currency_with_price' => 'Want to show currency with price?',
        'approve_reviews_before_publishing'=>'Approve Reviews Before Publishing?',
        'currency_name'=>'Currency Name',
        'currency_symbol'=>'Currency Symbol',
        'enable_purchase_restriction_depending_on_stock'=>'Enable Purchase Restriction Depending On Stock?',
        'enable_tax_deduction_for_purchase'=>'Enable Tax Deduction For Purchase?',
        'only_cart_products'=>'Only Cart Products',
        'open_review_section_for_customers'=>'Open Review Section for Customers?',
        'products_with_shipping_charge'=>'Products With Shipping Charge',
        'show_product_stock'=>'Show Product Stock?',
        'show_reviews_on_products'=>'Show Reviews On Products?',
        'tab_inventory'=>'Orders & Inventory',
        'tab_tax'=>'Tax',
        'tab_emails'=>'Emails',
        'tax_percentage'=>'Tax Percentage',
        'want_to_show_currency_with_price'=>'Want To Show Currency With Price?',
        'which_order_status_deduct_product_quantity'=>'Which Order Status Deduct Product Quantity?',
        'which_order_status_reverts_product_deduction_quantity'=>'Which Order Status Reverts Product Deduction Quantity?',
        'which_type_of_currency_will_show'=>'Which Type Of Currency Will Show?',
        'tax_apply_on'=>'Tax Apply On?',
        'what_will_be_initial_order_status'=>'What will be the initial order status?',
        'send_email_on_order_status_change' => 'Send Email On Order Status Change?',
        'select_order_status' => 'Select Order Status & Email Template',
        'add_new_template' => 'Add New Template',
        'order_status' => 'Order Status',
        'email_template' => 'Email Template',

        'cart_title' => 'Shopping Cart',
        'cart_description' => 'Displays Shopping Cart data and count.',
        'category_title' => 'Category List',
        'category_description' => 'Displays a list of blog categories on the page.',
        'category_slug' => 'Category slug',
        'category_slug_description' => "Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.",
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any products.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'product_title' => 'Product',
        'product_description' => 'Displays a blog product on the page.',
        'product_slug' => 'Product slug',
        'product_slug_description' => "Look up the blog product using the supplied slug value.",
        'product_category' => 'Category page',
        'product_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'products_title' => 'Product List',
        'products_description' => 'Displays a list of latest blog products on the page.',
        'products_pagination' => 'Page number',
        'products_pagination_description' => 'This value is used to determine what page the user is on.',
        'products_filter' => 'Category filter',
        'products_filter_description' => 'Enter a category slug or URL parameter to filter the products by. Leave empty to show all products.',
        'products_per_page' => 'Products per page',
        'products_per_page_validation' => 'Invalid format of the products per page value',
        'products_no_products' => 'No products message',
        'products_no_products_description' => 'Message to display in the blog product list in case if there are no products. This property is used by the default component partial.',
        'products_no_products_default' => 'No products found',
        'products_order' => 'Product order',
        'products_order_description' => 'Attribute on which the products should be ordered',
        'products_category' => 'Category page',
        'products_category_description' => 'Name of the category page file for the "Product into" category links. This property is used by the default component partial.',
        'products_product' => 'Product page',
        'products_product_description' => 'Name of the blog product page file for the "Learn more" links. This property is used by the default component partial.',
        'products_except_product' => 'Except product',
        'products_except_product_description' => 'Enter ID/URL or variable with product ID/URL you want to exclude. You may use a comma-separated list to specify multiple products.',
        'products_except_product_validation' => 'Product exceptions must be a single slug or ID, or a comma-separated list of slugs and IDs',
        'products_except_categories' => 'Except categories',
        'products_except_categories_description' => 'Enter a comma-separated list of category slugs or variable with such a list of categories you want to exclude',
        'products_except_categories_validation' => 'Category exceptions must be a single category slug, or a comma-separated list of slugs',
        'group_links' => 'Links',
        'group_exceptions' => 'Exceptions'
    ],
];