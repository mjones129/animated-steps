<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="images/steps.svg" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Animated Steps</h3>

  <p align="center">
    Create step-by-step slideshows.
    <br />
    <br />
    <br />    
    <a href="https://gitlab.4miles.com/marketing/animated-steps/-/issues">Report Bug</a>
    ·
    <a href="https://gitlab.4miles.com/marketing/animated-steps/-/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#how-it-works">How It Works</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Adopt A Horse Screen Shot][product-screenshot]](https://example.com)

This plugin allows users to insert animated steps slideshows with a simple shortcode.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

[![Node][NodeJS]][Node-url]

[![NPM][NPM]][NPM-url]

[![Glide][GlideJS]][Glide-url]

<!-- [![Deploybot][Deploybot]][Deploybot-url] -->

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

It may go without saying, but it may not, so I'm just going to say it anyway, this is a WordPress plugin and intended to be used as such. This code won't work on its own, and will only work within WordPress if there are other dependencies present and configured correctly.

### Prerequisites

As mentioned above, this is a WordPress plugin that will depend on a few other things being in place. Here's a brief rundown of what's required:

* WordPress version 6.4.2 or later
* ~~ACF Pro vserion 6.2.4 or later~~
* ~~MilesIT Blocks theme (version unknown)~~


### Installation

1. Access your WordPress install and navigate to the plugins folder. 
    `wp-content/plugins/`.
2. create a new folder in your plugins director and name it `animated-steps`.
3. Navigate inside the `animated-steps` folder and clone the repo
   ```sh
   git clone git@github.com:mjones129/animated-steps.git .
   ```
   Don't forget the dot at the end!
4. Activate the plugin in the `wp-admin` area.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- How It Works -->
## How It Works

To create a default slider, simply insert the shortcode `[as]`. This will return a simple slider with 3 slides and buttons.
To customize the content of the slider, simply pass in parameters.

### Custom parameters

* `btn1` = `$string`
* `btn2` = `$string`
* `btn3` = `$string`
* `img1` = `$url`
* `img2` = `$url`
* `img3` = `$url`

Full Example:

`[as btn1="Step 1" btn2="Step 2" btn3="Step 3" img1="https://source.unsplash.com/random/" img2="https://source.unsplash.com/random/" img3="https://source.unsplash.com/yEW23jxVsNI"]`

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Register slider shortcode on activation
- [x] Import and configure GlideJS to power slider
- [x] Reload (or replay) animated SVGs on slider movement
- [x] User defined images without depending on ACF
- [x] User defined button text
- [x] Instantiate a new instance of GlideJS for each element with a class name of `.glide`

See the [open issues](https://gitlab.4miles.com/marketing/adopt-a-horse/-/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request




<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[Deploybot]: https://img.shields.io/badge/deployed_with-Deploybot-white
[Deploybot-url]: https://milesit.deploybot.com/
[NodeJS]: https://img.shields.io/badge/v16.20.2-NodeJS-green
[Node-url]: https://nodejs.org/
[NPM]: https://img.shields.io/badge/v8.19.4-NPM-CD0000
[NPM-url]: https://npmjs.com/
[GlideJS]: https://img.shields.io/badge/v3.6.1-GlideJS-ED145B
[Glide-url]: https://glidejs.com/

