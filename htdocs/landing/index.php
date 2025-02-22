<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GOCDB</title>
  <link rel="stylesheet" type="text/css" href="home.css" />
  <link rel="SHORTCUT ICON" href="Logo-1.4-FavIcon-32x32.regional.ico" />
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>

<body>
  <div class="page_container">
    <div class="centre_box">
      <div class="centrePageContainer">
        <div style="text-align: center;">
          <div style="width: 100%; margin-left: auto; margin-right: auto;">
            <img class="Landing_Logo" src="Logo-1.6.png" alt="The logo of the Grid Operations Centre Database service"/>
            <h1 class="Landing_Welcome">Welcome to GOCDB</h1>
          </div>
          <div style="width: 80%; margin-left: auto; margin-right: auto;">
            <p>Use of GOCDB is governed by the <a class="docLink hover" href="aup.html">EGI Acceptable Use Policy</a> which places restrictions on your use of the service.</p>
            <p>The <a class="docLink hover" href="privacy.html">GOCDB Privacy Notice</a> describes what personal data is collected and why, and your rights regarding this data.</p>
            <p> Please read these documents before accessing GOCDB.</p>
          </div>
          <div style="width: 80%; margin-left: auto; margin-right: auto;">
            <a href="/portal/" style="width:68%; font-size:1.7em" class="button">Access GOCDB using your IGTF X.509 Certificate</a>
            <p>or</p>
            <p>Access GOCDB using one of the following:</p>
            <div>
                <?php
                $hostname = $_SERVER['HTTP_HOST'];
                $egi_target = urlencode("https://" . $hostname . "/portal/");
                $egi_redirect = "https://" . $hostname . "/Shibboleth.sso/Login?target=" . $egi_target;
                if($_SERVER['REQUEST_URI'] === "/"){
                    $iam_target = "target_link_uri=" . urlencode("https://" . $hostname . "/portal/");
                }
                else{
                    $iam_target=ltrim($_SERVER['REQUEST_URI'], '/?');
                }
                $iris_url = urlencode("https://iris-iam.stfc.ac.uk/");
                $iam_redirect = "https://" . $hostname . "/portal/redirect_uri?iss=" . $iris_url . "&" . $iam_target;
                ?>
                <a style="width:30%; display:inline-block; font-size:1.5em" href="<?php echo $egi_redirect; ?>" class="button">EGI Check-In</a>
                <a style="width:30%; display:inline-block; font-size:1.5em"  href="<?php echo $iam_redirect ?>" class="button">IRIS IAM</a>
            </div>
            <p>Browse the <a href="https://wiki.egi.eu/wiki/GOCDB" class="docLink hover">GOCDB documentation index</a> on the EGI wiki.</p>
          </div>

          <div style="height:34px;">
              <a href="https://stfc.ukri.org" class="Sponsor_Link" target="_blank">
                <!-- Allow for STFC council symbol extending above the upper bound of the UKRI symbol -->
                <img  style="height: 112%; margin-top: -12%;" class="Sponsor_Logo"
                src="UKRI_STF_Council-Logo_Horiz-RGB.png"
                alt="The logo of the Science and Technology Facilities Council" /></a>
              <a href="https://europa.eu/european-union/index_en" class="Sponsor_Link" target="_blank">
                <img class="Sponsor_Logo" src="eu_flag_yellow_low_150.png"
                alt="The logo of the European Union" />
              </a>
              <a href="https://www.egi.eu" class="Sponsor_Link" target="_blank">
                <img class="Sponsor_Logo" src="egi_logo_no_background_150.png"
                alt="The logo of the E G I Foundation" />
              </a>
              <a href="https://eosc-hub.eu/" class="Sponsor_Link" target="_blank">
                <img class="Sponsor_Logo" src="eosc-hub-v-web_150.png"
                alt="The logo of the EOSC-hub Horizon 20 20 project" />
              </a>
          </div>
          <div class="Copyright_Text">
            <p>The GOCDB service is provided by <a class="docLink" href="https://stfc.ukri.org/">STFC</a>,
              part of <a class="docLink" href="https://www.ukri.org">UK Research and Innovation</a>,
              for <a class="docLink" href="https://egi.eu">EGI</a>,
              co-funded by <a class="docLink" href="https://egi.eu">EGI.eu</a> and
              <a class="docLink hover" href="https://eosc-hub.eu">EOSC-hub</a>.
              Licensed under the <a class="docLink" href="https://www.apache.org/licenses/LICENSE-2.0">Apache 2 License</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
