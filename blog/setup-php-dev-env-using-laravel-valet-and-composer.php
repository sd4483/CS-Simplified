<?php include ("../header.php"); ?>

<main>
    <h1>Setting up PHP dev environment using Laravel Valet and Composer on M series MacBooks</h1>
    <p>This guide is for setting up a development environment for PHP projects using Laravel Valet and Composer on M series MacBooks.</p>
    <p>What you need for this:</p>
    <ul>
        <li>HomeBrew</li>
        <li>PHP</li>
        <li>Composer</li>
        <li>Laravel Valet</li>
    </ul>
    <h2>Installing HomeBrew</h2>
    <p>Go to https://brew.sh/ and install homebrew by copying the install script into terminal on your mac.</p>
    <h2>Installing PHP</h2>
    <p>Once HomeBrew is installed successfully, install php by typing 'brew install php' into your terminal.</p>
    <h2>Installing Composer</h2>
    <p>Once PHP is installed, go to this page - https://getcomposer.org/download/ and install composer by copying and running the 4 scripts shown under 'Download Composer' heading on the page. 
        Once the composer is installed, you should be able to check its version by typing 'php composer.phar -v' into your terminal.
    </p>
    <h2>Installing Laravel Valet</h2>
    <p>Once composer is installed, install Laravel Valet by typing the command 'php composer.phar global require laravel/valet' into your terminal. 
        After that, run 'valet install'. These two commands should successfully install Laravel Valet on your mac. To check Laravel Valet installation, run 'valet -v' in your terminal, that should output the version info.
    </p>
    <h2>Running PHP sites using Laravel Valet</h2>
    <p>To run a PHP website or project using Laravel Valet, go to the directory in which the project folder is located. 
        Once you are in the directory on your terminal, run 'valet park' command. The 'park' registers that directory on your machine as containing PHP projects. 
        All the projects can be accessed on your browser by running 'http://<directory-name>.test' in the url bar. For example, if one of the folder names is 'cool-website', then you can open it by running 'http://cool-website.test' in the url bar.
    </p>
</main>

<?php include ("../footer.php"); ?>
