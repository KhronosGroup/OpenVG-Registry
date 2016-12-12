<?php
$static_title = 'Khronos OpenVG Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'OpenVG Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos OpenVG&trade; Registry</h1>
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenVG&trade; Registry </h1>

<p> The OpenVG registry contains specifications of the core API;
    specifications of Khronos- and vendor-approved OpenVG extensions;
    header files corresponding to the specifications; an enumerant and
    function registry; and other related documentation. </p>

<h6> OpenVG Core API Specification, Headers, and Sample Implementation </h6>

<p> The current version of OpenVG is OpenVG 1.1, updated December 3, 2008.

<h6> OpenVG 1.1 Specific </h6>

<ul>
<li> OpenVG 1.1
     <a href="specs/openvg-1.1.pdf">Specification</a> (December 3, 2008).
     </li>
<li> OpenVG 1.1 Header File
     <a href="api/1.1/openvg.h">(openvg.h)</a> (October 29, 2008). </li>
<li> OpenVG 1.1 Utility Library Header File
     <a href="api/1.1/vgu.h">(vgu.h)</a> (October 29, 2008). </li>
<li> OpenVG Platform-Dependent Macros
     <a href="api/1.1/vgplatform.h">(vgplatform.h) </a>
     (October 29, 2008). </li>
<li> OpenVG 1.1 Extension Header File
     <a href="api/1.1/vgext.h"> vgext.h </a> (October 29, 2008). </li>
<li> OpenVG 1.1
     <a href="ri/openvg-1.1-ri.zip">Sample Implementation</a>
     (December 1, 2008). </li>
</ul>


<h6> OpenVG 1.0.1 Specific </h6>

<ul>
<li> OpenVG 1.0.1
     <a href="specs/openvg_1_0_1.pdf">Specification</a> (March, 2007).
     </li>
<li> OpenVG 1.0.1
     <a href="api/1.0.1/openvg.h">openvg.h sample header file</a>
     (March, 2007). </li>
<li> OpenVG 1.0.1
     <a href="api/1.0.1/vgu.h">vgu.h sample header file</a> (March,
     2007). </li>
<li> OpenVG 1.0.1
     <a href="ri/openvg-1_0_1-ri.zip">Sample Implementation</a>
     (March, 2007). </li>
</ul>
<h6> <a name="otherextspecs"></a>
     Extension Specifications</h6>
<ol>
<li value=1> <a href="extensions/KHR/VG_KHR_EGL_image.txt">VG_KHR_EGL_image</a>
</li>
<li value=2> <a href="extensions/KHR/iterative_average_blur.txt">VG_KHR_iterative_average_blur</a>
</li>
<li value=3> <a href="extensions/KHR/advanced_blending.txt">VG_KHR_advanced_blending</a>
</li>
<li value=4> <a href="extensions/NDS/paint_generation.txt">VG_NDS_paint_generation</a>
</li>
<li value=5> <a href="extensions/KHR/parametric_filter.txt">VG_KHR_parametric_filter</a>
</li>
<li value=6> <a href="extensions/NDS/projective_geometry.txt">VG_NDS_projective_geometry</a>
</li>
<li value=7> <a href="../egl/extensions/KHR/EGL_KHR_fence_sync.txt">VG_KHR_EGL_sync</a> (included with EGL_KHR_fence_sync in the EGL registry)
</li>
<!-- New extension specifications must be added here -->
</ol>

<h6> Providing Feedback on the Registry </h6>

<p> Khronos welcomes comments and bug reports. To provide feedback on the
    OpenVG registry itself (such as reporting missing content, bad links,
    etc.), file an issue in the <a
    href="https://github.com/KhronosGroup/OpenVG-Registry/issues">
    OpenVG-Registry </a> Github project. </p>

<p> For the OpenVG API, extensions, and headers, file a bug on the <a
    href="http://www.khronos.org/bugzilla/"> Khronos Bugzilla </a>. Make
    sure to fill in the &quot;Product&quot; field in the bug entry form as
    &quot;OpenVG&quot;, and pick appropriate values for the Component and
    other fields. </p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
