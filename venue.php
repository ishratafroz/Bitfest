<?php include("path.php"); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Font Awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous" />
        <!-- Custom Styling-->
        <link rel="stylesheet" href="assets/css/stye.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
        <script src="assets/js/venue.js defer"></script>
        
        <title>Event-Schedule</title>
    </head> 

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="section-header"> 
        <h2> Event schedule</h2>
    </div>
    <ul class="tabs">
        <li data-tab-target="#day-01" class="active tab">day-01</li>
        <li data-tab-target="#day-02">day-02</li>
    </ul>
<div class="tab-content">
   <!-- Schdule Day 1 -->
  <div id="day-01 data-tab-content" class="active">
  <table class="table table-bordered mx-auto w-auto">
          
  <thead class="thead-light">
                <tr>
                  <th>SL</th>
                  <th>EVENT</th>
                  <th>TIME</th>
                  <th>HALL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Reporting (Project Showcase, LFR, Game (FIFA &amp; NFS), IT Quiz)</td>
                  <td>08:00 AM - 08:30 AM</td>
                  <td>SWC-Ground Floor</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Inauguration</td>
                  <td>08:30 AM - 09:30 AM</td>
                  <td>SWC R-201</td>
                </tr>

            <tr>
              <th scope="row">3</th>
              <td>Project Showcase</td>
              <td>10:00 AM - 12:00 PM</td>
                  <td>SWC-Archive Room</td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>IT Quiz</td>
              <td>10:00 AM - 12:00 PM</td>
                  <td>CSE R-101, 102, 501, 502</td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>
                Gaming Contest(FIFA &amp; NFS)</td>
              <td>10:00 AM - 05:00 PM</td>
                  <td>Central Computer Center</td>
            </tr>

            <tr>
            <th scope="row">6</th>
              <td>Line Follower Robot</td>
              <td>10:00 AM - 05:00 PM</td>
                  <td>SWC R-307</td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td>Lunch Break</td>
              <td>01:00 PM - 02:00 PM</td>
                  <td></td>
            </tr>

            <tr>
              <th scope="row">8</th>
              <td>Reporting (Poster Presentation)</td>
              <td>02:00 PM - 02:30 PM</td>
                  <td>SWC-Archive Room</td>
            </tr>

            <tr>
              <th scope="row">9</th>
              <td>Poster Presentation</td>
              <td>03:30 PM - 05:00 PM</td>
                  <td>CSE R-505</td>
            </tr>

            <tr>
              <th scope="row">10</th>
              <td>Mock Programming Contest
                    </td>
              <td>04:00 PM - 06:00 PM</td>
                  <td>Block-A &amp; B (New Academic Building)</td>
            </tr>

          </tbody>
        </table>
      </div>
          <!-- End Schdule Day 1 -->
    <div id="day-02 data-tab-content">
    <table class="table table-bordered mx-auto w-auto">
              <thead class="thead-light">
                <tr>
                  <th>SL</th>
                  <th>EVENT</th>
                  <th>TIME</th>
                  <th>HALL</th>
                </tr>
              </thead>
              <tbody>

            <tr>
              <th scope="row">1</th>
              <td>Reporting (Hackathon)</td>
              <td>07:30 AM - 08:00 AM</td>
              <td>SWC-Ground Floor</td>
            </tr>

            <tr>
            <th scope="row">2</th>
                <td>Hackathon</td>
              <td>08:00 AM - 04:00 PM</td>
              <td>CSE R-501, 502, 505</td>
            </tr>

            <tr>
            <th scope="row">3</th>
              <td>Reporting (IT Business Case Study)</td>
              <td>08:30 AM - 09:00 PM</td>
                  <td>SWC</td>
            </tr>

            <tr>
            <th scope="row">4</th>
              <td>IT Business Case Study (Problem Release)</td>
              <td>09:00 AM</td>
                  <td>CSE R-301</td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>Reporting (Programming Contest)</td>
              <td>08:00 AM - 08:30 AM</td>
                  <td>SWC</td>
            </tr>

            <tr>
              <th scope="row">6</th>
              <td>Programming Contest</td>
              <td>09:00 AM - 02:00 PM</td>
                  <td>Block-A &amp; B (New Academic Building)</td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td>Lunch Break </td>
              <td>01:00 PM - 02:00 PM</td>
                  <td> </td>
            </tr>

            <tr>
            <th scope="row">8</th>
              <td>IT Business Case Study (Presentation Submission)</td>
              <td>02:00 PM</td>
                  <td>CSE R-101, 102</td>
            </tr>
		  <tr>
            <th scope="row">9</th>
              <td>Seminar on Entrepreneurship &amp; Leadership</td>
              <td>03:30 PM - 04:15 PM</td>
                  <td>SWC 201</td>
            </tr>
          <tr>
            <th scope="row">10</th>
              <th>Closing &amp; Prize Giving Ceremony</th>
              <td>05:00 PM - 07:00 PM</td>
                  <td>SWC</td>
            </tr>
                      
          </tbody>
        </table>

          </div>
          <!-- End Schdule Day 2 -->

</div>

           
</body>
</html>