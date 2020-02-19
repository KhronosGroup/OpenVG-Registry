# News

OpenVG 1.1 Lite provisional specification and its CTS open to public. Your feedback is welcome.
OpenVG CTS projects are open to public as open source. Please check https://github.com/KhronosGroup/OpenVG-CTS 

# OpenVG-Registry

The OpenVG-Registry repository contains the OpenVG API and Extension
Registry, including specifications.

It is also used as a backing store for the web view of the registry at
https://www.khronos.org/registry/vg/ ; commits to the master branch of this
repository will be reflected there.

In the past, the OpenVG registry was maintained in a public Subversion
repository. The history in that repository has not been imported to github,

Interesting files in this repository include:

* api/ - OpenVG header files
* extensions/ - OpenVG extension specifications, grouped into
  vendor-specific subdirectories.
* specs/ - OpenVG specification documents.
* ri/ - OpenVG reference implementations.


## Adding Extension Specifications

Extension specification documents can be added by proposing a pull request
to master, adding the specification .txt file under
extensions/<vendor>/filename.txt . You must also:

* Allocate an extension number in registry.txt (follow the existing
  extension examples, search for "Next free extension number", and use the
  lowest available extension number.
* Include that extension number in the extension specification document.
* Add a link from the extensions section of index.php to the extension
  document, using the specified extension number, so it shows up in the web
  view.

Sometimes extension text files contain inappropriate UTF-8 characters. They
should be restricted to the ASCII subset of UTF-8 at present. They can be
removed using the iconv Linux command-line tool via

    iconv -c -f utf-8 -t ascii filename.txt
