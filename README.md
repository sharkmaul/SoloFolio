SoloFolio
=========
http://www.solofolio.net/

SoloFolio is currently a developer theme, meaning you're going to need some programming experience to deploy it properly. Many of its features are not currently documented. 

To see a site utilizing the latest public release (v4), visit http://www.joelhawksley.com.

This repository contains my "nightly" builds. It is NOT production-ready. I've uploaded stable builds for deployment.


ABOUT

SoloFolio is more than a theme. The core components drastically modify the way WordPress works in order to shape its output into a professional portfolio design. 

Because of this, some things aren't the easiest to set up. Once properly configured, there is no additional work to build out a SoloFolio site compared to any other WordPress theme.


SUPPORT

SoloFolio is provided as a public service on an AS-IS basis. 

To submit a feature request/bug report, go to: https://solofolio.uservoice.com/

If you’re looking for custom design and/or hands-on support, feel free to contact me for a consultation at joel@joelhawksley.com.


FEATURES TO NOTE

SoloFolio does a lot of work behind the scenes to present your work in the best way possible on all platforms. In order to do this, there are a few behavioral overrides you should keep in mind. 

They include (but are not limited to):

-Galleries inserted into blog posts will be forced into the vertical scroll template.

-Mobile devices are fed the side-scroll gallery by default.

-Phones/small screens are assigned a mobile-friendly header with collapsable menu, in addition to vertically scrolling galleries.


INSTALLATION

1. Copy theme files to wp-content/themes

2. Activate theme in WordPress dashboard.

3. Navigate to SoloFolio > General and click "update" to write initial settings to your WordPress installation. Do the same for SoloFolio > Design and SoloFolio > Gallery.

4. Under Appearance > Menus, make a menu and assign it to the home container.

5. Under Settings > Media, set the Large size to 900 x 600. This is the default size for galleries and blog posts.

6. When uploading images, size to fit 1800x1200 and ~450kb file size. This image will be used in full screen mode, on supported retina devices, and large displays.


USING THE GALLERY

SoloFolio piggy-backs on the built-in WordPress gallery manager. The [gallery] shortcode will accept the following variables:

type : slideshow, side-scroll, vert-scroll (default: slideshow)

captions : true, false (default: true)

fullscreen : true, false (default: true)

showthumbnails : true, false (default: true)

transition : fade, flash, pulse, slide, fadeslide (default: none)

speed : slide duration in ms (default: 9000)

shownav : true, false (default: true)

showcounter : true, false (default: true)

autoplay : true, false (default: false)

width : width in px (default: 900px, responsive)

height : height in px (default: .667, responsive)
fullscreen : true, false (default: true)
	

RECOMMENDED PLUGINS

-Akismet
-All-in-one SEO
-Fast Secure Contact Form
-Wordfence

THANKS

-To Patrick and Aaron, for helping me develop V1.0 in 2009
-To all the users who have submitted ideas/features/bug reports

-To the following open source projects, whose code is incorporated in this release:
	-Galleria
	-jQuery.Retina
	-JQuery.jknav

-To the fine folks at StackOverflow, for having a solution to every bug on the planet.


LICENSE:

In plain english:

1. SoloFolio can be used for both personal and commercial projects.

2. You can NOT publish, redistribute, or otherwise disseminate any component of SoloFolio, including the gallery components used in the theme.

3. Attribution is appreciated, but not required. You can toggle this setting under SoloFolio > General.
 
Now for the legalese:

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL SOLFOLIO BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.