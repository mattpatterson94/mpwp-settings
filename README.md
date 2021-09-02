### MPWP SETTINGS WORDPRESS PLUGIN


This plugin was created to add generic settings pages to wordpress sites, to reduce repetition.


#### How it works

This plugin installs [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) when running composer install, in order to create options pages for any wordpress site this plugin is activated on. This makes starting out new wordpress sites a lot easier, and you don't have to create any standard wordpress options pages.

#### Current Options
These are the current option pages set up currently.

- Theme settings
	- General
    - Social media
    - Footer settings
    - Slides

#### Current Shortcodes
There are shortcodes available via this plugin that can be used in the theme.
- General
  - `[mpwp-setting setting="example"]`
  - `[logo]`
  - `[phone-number]`
  - `[email-address]`
- Social media
  - `[social-url product="example"]`
- Footer settings
  - `[copyright-text]`

#### Adding new options
To create a new options page, there's a few lines of code needed.

- Create a new options file in `options` for the new page
- Refer to [this guide](https://www.advancedcustomfields.com/resources/options-page/) for setting up a new option page, or look at an existing one in the plugin

##### Creating option fields
- To create the fields for the options page, log into the wordpress site you're currently developing.
- Install ACF if it's not already installed.
- Create the fields you want to add to the options page.
- Export the fields as PHP in the `export` menu, within ACF.
- Paste the code it gives you into the options file you created.
- Look for `location` in the code you pasted in.
- Replace `location` with the following:
```
'location' => array (
	array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-[OPTIONSPAGE]',
      ),
    ),
),
```
- Replace `OPTIONSPAGE` with the name of the options page.
- If any issues, refer to current options pages for reference.
