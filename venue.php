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
   <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/css/style.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
        <script src="assets/js/venue.js defer"></script>

<!-- bootstrap js-->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <title>Event-Schedule</title>
    </head> 

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="section-header"> 
        <h2> Event schedule</h2>
   
    <h2>Day-01</h2>
    
  <table class="table table-striped table-dark">
          
  <thead>
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
    
          <!-- End Schdule Day 1 -->
    <h2>Day- 02</h2>
    <table class="table table-striped table-dark">
              <thead">
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



           
</body>
</html>