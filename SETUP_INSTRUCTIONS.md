# WordPress Page Setup Instructions

## Creating Pages for Treehouse Therapy Center

After activating the theme, you need to create WordPress pages and assign the custom templates. Follow these steps:

### 1. Create the Services Page

1. Go to **WordPress Admin → Pages → Add New**
2. Set the page title to: **Services**
3. On the right sidebar, find **Page Attributes → Template**
4. Select: **Services Page** from the dropdown
5. Click **Publish**
6. Go to **Settings → Reading**
7. Make sure the page you created shows up in navigation

### 2. Create the About Page

1. Go to **Pages → Add New**
2. Title: **About** (or "About Us")
3. Template: **About Page**
4. Click **Publish**

### 3. Create the Careers Page

1. Go to **Pages → Add New**
2. Title: **Careers**
3. Template: **Careers Page**
4. Click **Publish**

### 4. Create the Contact Page

1. Go to **Pages → Add New**
2. Title: **Contact**
3. Template: **Contact Page**
4. Click **Publish**

### 5. Update Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu called "Main Navigation" (if it doesn't exist)
3. Add the pages in this order:
   - Home
   - About
   - Services
   - Careers
   - Contact
4. Set this menu as the "Primary Menu" location
5. Save the menu

### 6. Set Homepage

1. Go to **Settings → Reading**
2. Select "A static page" for homepage displays
3. Choose "Homepage" or create a new page with the **Homepage** template
4. For front page, you can use the existing `front-page.php` (no page needed)

## Troubleshooting

### "No content found" message
- This means the page doesn't exist in WordPress yet
- Follow the steps above to create the pages
- Make sure you've assigned the correct template to each page

### Template not showing in dropdown
- Make sure the theme is activated
- The template files have the correct comment header: `Template Name: Page Name`
- Try refreshing the WordPress admin page

### Navigation not showing pages
- Go to Appearance → Menus
- Make sure the pages are added to your menu
- Verify the menu location is set correctly in the theme

## Page Templates Available

- **Homepage** - Automatically uses `front-page.php`
- **About Page** - Uses `page-about.php`
- **Services Page** - Uses `page-services.php`
- **Careers Page** - Uses `page-careers.php`
- **Contact Page** - Uses `page-contact.php`
- **Process Page** - Uses `page-process.php`
- **Locations Page** - Uses `page-locations.php`

## Quick WordPress Admin URLs

Assuming your WordPress is at `http://treehouse-theme-preview.local/`:

- Create new page: `/wp-admin/post-new.php?post_type=page`
- Manage pages: `/wp-admin/edit.php?post_type=page`
- Menus: `/wp-admin/nav-menus.php`
- Reading settings: `/wp-admin/options-reading.php`
- Theme settings: `/wp-admin/themes.php`

## Contact Form Setup (Optional)

If you want the contact forms to actually work:

1. Install Contact Form 7 plugin
2. Create forms for each contact section
3. Update the form action URLs in the template files
4. Or use a form handling service like FormSpree or Google Forms

## Default Pages Content

The template files handle all the content, so you don't need to add content to the WordPress editor. Just:
1. Create the page
2. Assign the template
3. Publish

The template will display all the designed sections automatically!
