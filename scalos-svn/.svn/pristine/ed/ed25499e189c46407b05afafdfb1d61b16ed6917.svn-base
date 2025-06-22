<?php 
    // Include the table functions
    include('functions_downloads.inc');

    // Define variables
    $page_title = 'Scalos - Developers';
    $page_nav_doc = 'developers';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>
<!-- Developers -->
<?php make_title('developers', 0, 'developers.gif', 200, 30, 'Developers'); ?>

<p>Welcome to the Scalos Developers page. Here you'll find information, programs and code that should help you in starting to develop for the Scalos desktop environment. You can download 
the latest developers archives and contact us directly if you need any help.<br><br>

Please note that it is currently very rough but we plan to clean up the third-party development side of the distribution once the main Scalos desktop is bug-fixed a bit more.<br><br>

If you wish to discuss any programming/development related subjects regarding Scalos please join the <a href="links.php">mailing list</a>. If you have any specific programming 
language problems, please consult a specific mailing list such as <a href="http://www.yahoogroups.com/group/amiga-c" target="_blank">amiga-c@yahoogroups.com</a> (for the 'C' language only!).<br><br>

If you would like to see anything specific in this archive please mail us at <a href="mailto:Scalos@VFEmail.net">Scalos@VFEmail.net</a>.</p>

<!-- Archives -->
<?php make_title('archives', 1, 'devarchives.gif', 145, 30, 'Archives'); ?>
<br>

<!-- NOTE: Development archives are placed in "products/scalos/developer/" -->
<div align="center">
<?php
    make_download_table('Development archives', 'Please select a development archive from the table below:');
    format_line('products/scalos/developers/ScalosTranslation_41.7.lha', 'Scalos V41.7 Translation Kit', '~391KB', '', 'This is a complete translation kit with catalog files for all Scalos components. Unfortunately, due to lack of translators, only French and German catalogs are complete and up-to-date.');
    format_line('products/scalos/developers/ScalosDev_V41.7.lha', 'Scalos Dev Pack V41.7', '~256KB', '', 'This is version 41.7 of the Scalos Developers\' Pack.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<!-- Example and (L)GPL Source Code -->
<?php make_title('examples', 1, 'devexamples.gif', 310, 30, 'Example and (L)GPL Source Code'); ?>
<br>

<!-- NOTE: Source code archives are in "products/scalos/source/" -->
<div align="center">
<?php
    make_download_table('Example and (L)GPL Source Code', 'Please select a source code archive from the table below:');
    format_line('products/scalos/source/VideoPlugin-src.lha', 'Video preview plugin', '35KB', '', 'This is the complete source code for the video thumbnail preview plugin, which uses the LGPL avcodec library.');
    format_line('products/scalos/source/DeleteModule-src.lha', 'Delete.module', '50KB', '', '<a href="http://www.worldfoundry.demon.co.uk">Chris Page</a> released his delete.module as <a href="http://www.gnu.org">GNU FSF</a>. Take a look! The code has been adapted to match current Scalos build system, and compiled with both SAS/C and GCC.');
    format_line('products/scalos/source/Scalos-PluginSrc_Persist.lha', 'Persistent Windows Plugin', '5KB', '', 'This is the C source code for the &quot;Persistent Windows&quot; plugin by J&uuml;rgen. It compiles with both SAS/C and GCC, and builds for both AmigaOS/68K and MorphOS/PPC. Recently updated (08.05.2005).');
    format_line('products/scalos/source/Scalos-PluginSrc_XTWindows.lha', 'XTWindows Plugin', '18KB', '', 'This source code shows you how to use the Scalos API to add features to windows. There\'s only two functions at the moment, which allow you to close windows when opening drawers or files etc. More details in the archive.');
    format_line('products/scalos/source/Scalos-PluginSrc_TitlePPC.lha', 'PPC Title Plugin', '18KB', '', 'This source code shows you how to create a title bar plugin for Scalos interfacing with PowerUP ppc.library. This is the version with the PPC CPU revision placeholder. Written in C.');
    format_line('products/scalos/source/Scalos-PluginSrc_Freepens.lha', 'Freepens Plugin', '15KB', '', 'This source code shows you how to create a title bar plugin for Scalos that displays the number of free pens. Written in C.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<!-- Autodocs -->
<?php make_title('autodocs', 1, 'devautodocs.gif', 160, 30, 'Autodocs'); ?>

<p>We are currently in the process of tidying up the third-party aspects of Scalos and so the autodocs may change. The current Scalos autodocs can be downloaded as part of the main Scalos Developers 
package <a href="developers.php#archives">above</a>. Alternatively, you can read them online by following the links below:</p>

<ul>
  <li><a href="manual/autodocs/scalos.html">scalos.library</a> - This library is used as application interface for the Scalos Workbench replacement</li>
  <li><a href="manual/autodocs/scalosgfx.html">scalosgfx.library</a> - This documentation gives you information about scalosgfx.library</li>
  <li><a href="manual/autodocs/scalosAPI.html">Scalos API</a> - This documentation gives you information on how to communicate with Scalos and its windowtasks</li>
  <li><a href="manual/autodocs/SCA_DeviceList.html">Scalos devicelist</a> - This class is used to generate a list of all currently available devices</li>
  <li><a href="manual/autodocs/SCA_DeviceWindow.html">Scalos devicewindow</a> - This class implements the main Workbench (= root) window, which shows the icons for the mounted devices and volumes</li>
  <li><a href="manual/autodocs/SCA_FileTrans.html">Scalos filetrans</a> - This class is used to display a progress window showing the user what is currently going on while copying or moving files/directories</li>
  <li><a href="manual/autodocs/SCA_IconWindow.html">Scalos iconwindow</a> - This class implements the functionality for the common Workbench icon windows</li>
  <li><a href="manual/autodocs/SCA_Root.html">Scalos root</a> - This class is used for some fundamental message and event handling</li>
  <li><a href="manual/autodocs/SCA_TextWindow.html">Scalos textwindow</a> - This class implements the text-only Scalos windows</li>
  <li><a href="manual/autodocs/SCA_Title.html">Scalos title</a> - This class implements the screen title and window title functionality</li>
  <li><a href="manual/autodocs/SCA_Window.html">Scalos window</a> - This class implements all common window functionality used for icon windows, text windows and device windows</li>
  <li><a href="manual/autodocs/preferences.html">preferences.library</a> - This library provides a convenient way to store the preferences for your program</li>
  <li><a href="manual/autodocs/iconobject.html">iconobject.library</a> - This library is an interface to the iconobject.datatype</li>
  <li><a href="manual/autodocs/iconobject_dtc.html">iconobject.datatype</a> - The iconobject.datatype has a special API to work with icons. It makes both images, tooltypes and many more available</li>
</ul>

<?php
	$this_page = 'developers.php';
	include('footer.inc');
?>

