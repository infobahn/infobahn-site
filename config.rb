# Compass configuration file.
require "animation"
require "breakpoint"
require "autoprefixer-rails"
require "csso"

css_dir = "wp-content/themes/infobahn"
sass_dir = "assets/sass"
images_dir = "assets/img"
javascripts_dir = "assets/js"

output_style = :compressed

line_comments = true
cache = true

# Run autoprefixer every time styles are saved
on_stylesheet_saved do |file|
  css = File.read(file)
  File.open(file, 'w') do |io|
    # Uncomment to compress CSS with Csso
    # io << Csso.optimize( AutoprefixerRails.compile(css) )
    io << AutoprefixerRails.compile(css)
  end
end