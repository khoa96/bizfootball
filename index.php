<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/menu.php"; ?>
  <div class="main-page-wrapper football-page-wrapper">
    <!-- Top Matches Today -->
    <div class="container">
      <h3 class="page-title">Top Matches Today</h3>
      <div class="list-top-match-today">
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
            </div>
            <button class="btn-match btn-default">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHW S</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
              <span class="text-live">LIVE NOW</span>
            </div>
            <button class="btn-match btn-live">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
            </div>
            <button class="btn-match btn-default">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
              <span class="text-live">LIVE NOW</span>
            </div>
            <button class="btn-match btn-live">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
            </div>
            <button class="btn-match btn-default">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
              <span class="text-live">LIVE NOW</span>
            </div>
            <button class="btn-match btn-live">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
        <div class="list-top-match-item">
          <div class="left-content club-item">
            <img src="./images/mu-club.png" alt="">
            <span class="club-name">ARS</span>
          </div>
          <div class="middle-content">
            <div class="league-info">
              <span class="league-name">Premier League</span>
              <span class="league-time">Jun 8, 20:45</span>
            </div>
            <button class="btn-match btn-default">Watch</button>
          </div>
          <div class="right-content club-item">
            <img src="./images/chesea-club.png" alt="">
            <span class="club-name">CHE</span>
          </div>
        </div>
      </div>
      <div class="dash-wrapper">
        <img src="./images/dash-horizontal.png" class="dash-horizontal" alt="">
      </div>
    </div>
    <!-- Top Matches Today -->
    <div class="container">
      <div class="main-content-page-football">
        <div class="left-content">
          <div class="top-sidebar">
            <div class="calender-wrapper">
              <!--only show calender for pc-->
              <div id="datepicker" class="calendar calender-for-pc"></div>
              <!--only show calender for pc -->

              <!--only show calender for mobile -->
              <div class="calender-for-mobile">
                <div class="control-wrapper">
                  <div class="time-detail">
                    <button class="btn-calender btn-prev">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_6023)">
                          <path d="M12.5 5L7.5 10L12.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_1_6023">
                            <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                    <span class="time-calender" id="time-calender"></span>
                    <button class="btn-calender btn-next">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_6022)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_1_6022">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                  </div>
                  <button class="btn-calender btn-show" id="btn-show-calender">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.9582 2.96663V1.66663C13.9582 1.32496 13.6749 1.04163 13.3332 1.04163C12.9915 1.04163 12.7082 1.32496 12.7082 1.66663V2.91663H7.29153V1.66663C7.29153 1.32496 7.0082 1.04163 6.66653 1.04163C6.32487 1.04163 6.04153 1.32496 6.04153 1.66663V2.96663C3.79153 3.17496 2.69987 4.51663 2.5332 6.50829C2.51653 6.74996 2.71653 6.94996 2.94987 6.94996H17.0499C17.2915 6.94996 17.4915 6.74163 17.4665 6.50829C17.2999 4.51663 16.2082 3.17496 13.9582 2.96663Z" fill="white" />
                      <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM7.675 15.175C7.59167 15.2499 7.5 15.3083 7.4 15.35C7.3 15.3916 7.19167 15.4166 7.08333 15.4166C6.975 15.4166 6.86667 15.3916 6.76667 15.35C6.66667 15.3083 6.575 15.2499 6.49167 15.175C6.34167 15.0166 6.25 14.8 6.25 14.5833C6.25 14.3666 6.34167 14.15 6.49167 13.9916C6.575 13.9166 6.66667 13.8583 6.76667 13.8166C6.96667 13.7333 7.2 13.7333 7.4 13.8166C7.5 13.8583 7.59167 13.9166 7.675 13.9916C7.825 14.15 7.91667 14.3666 7.91667 14.5833C7.91667 14.8 7.825 15.0166 7.675 15.175ZM7.85 11.9833C7.80833 12.0833 7.75 12.175 7.675 12.2583C7.59167 12.3333 7.5 12.3916 7.4 12.4333C7.3 12.475 7.19167 12.5 7.08333 12.5C6.975 12.5 6.86667 12.475 6.76667 12.4333C6.66667 12.3916 6.575 12.3333 6.49167 12.2583C6.41667 12.175 6.35833 12.0833 6.31667 11.9833C6.275 11.8833 6.25 11.775 6.25 11.6666C6.25 11.5583 6.275 11.45 6.31667 11.35C6.35833 11.25 6.41667 11.1583 6.49167 11.075C6.575 11 6.66667 10.9416 6.76667 10.9C6.96667 10.8166 7.2 10.8166 7.4 10.9C7.5 10.9416 7.59167 11 7.675 11.075C7.75 11.1583 7.80833 11.25 7.85 11.35C7.89167 11.45 7.91667 11.5583 7.91667 11.6666C7.91667 11.775 7.89167 11.8833 7.85 11.9833ZM10.5917 12.2583C10.5083 12.3333 10.4167 12.3916 10.3167 12.4333C10.2167 12.475 10.1083 12.5 10 12.5C9.89167 12.5 9.78333 12.475 9.68333 12.4333C9.58333 12.3916 9.49167 12.3333 9.40833 12.2583C9.25833 12.1 9.16667 11.8833 9.16667 11.6666C9.16667 11.45 9.25833 11.2333 9.40833 11.075C9.49167 11 9.58333 10.9416 9.68333 10.9C9.88333 10.8083 10.1167 10.8083 10.3167 10.9C10.4167 10.9416 10.5083 11 10.5917 11.075C10.7417 11.2333 10.8333 11.45 10.8333 11.6666C10.8333 11.8833 10.7417 12.1 10.5917 12.2583Z" fill="white" />
                    </svg>
                  </button>
                </div>
                <div id="datepicker-mobile" class="calendar"></div>
              </div>
              <!--only show calender for mobile -->
            </div>
          </div>
          <!-- left sidebar only for pc-->
          <div class="left-sidebar-tabs left-sidebar-pc">
            <div class="tab main-tabs">
              <button class="tablinks" onclick="openTab(event, 'all')" id="defaultOpen">
                <img src="./images/all.png" alt="">
                <span>All League</span>
              </button>
              <button class="tablinks" onclick="openTab(event, 'champions')">
                <img src="./images/champions.png" alt="">
                <span>Champions League</span>

              </button>
              <button class="tablinks" onclick="openTab(event, 'europa')">
                <img src="./images/europa.png" alt="">
                <span>UEFA Europa League</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'premier')">
                <img src="./images/premier.png" alt="">
                <span>Premier League</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'la-liga')">
                <img src="./images/la-liga.png" alt="">
                <span>La Liga</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'bundesliga')">
                <img src="./images/bundesliga.png" alt="">
                <span>Bundesliga</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'seria')">
                <img src="./images/seria.png" alt="">
                <span>Serie A</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'ligue-1')">
                <img src="./images/ligue-1.png" alt="">
                <span>Ligue 1</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'worldcup')">
                <img src="./images/worldcup.png" alt="">
                <span>World Cup</span>
              </button>
            </div>
          </div>
          <!-- left sidebar only for pc-->

          <!-- left sidebar only for mobile-->
          <div class="left-sidebar-mobile">
            <div class="league-info">
              <img src="./images/all.png" alt="" class="league-image" id="league-image-mobile">
              <span class="league-name" id="league-name-mobile">All League</span>
            </div>
            <button class="btn-league-dropdown" id="btn-league-dropdown">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_6031)">
                  <path d="M8 10L12 14L16 10" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_1_6031">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </button>
            <div class="list-league-dropdown">
              <button class="league-dropdown-item">
                <img src="./images/all.png" alt="">
                <span>All League</span>
              </button>
              <button class="league-dropdown-item">
                <img src="./images/champions.png" alt="">
                <span>Champions League</span>

              </button>
              <button class="league-dropdown-item">
                <img src="./images/europa.png" alt="">
                <span>UEFA Europa League</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/premier.png" alt="">
                <span>Premier League</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/la-liga.png" alt="">
                <span>La Liga</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/bundesliga.png" alt="">
                <span>Bundesliga</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/seria.png" alt="">
                <span>Serie A</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/ligue-1.png" alt="">
                <span>Ligue 1</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/worldcup.png" alt="">
                <span>World Cup</span>
              </button>
            </div>
          </div>
          <!-- left sidebar only for mobile-->
        </div>
        <div class="middle-content">
          <div id="all" class="tabcontent">
            <div id="all-league-tabs">
              <ul class="sub-tabs-nav">
                <li><a href="#tabs-1">All Games</a></li>
                <li><a href="#tabs-2">Live</a></li>
                <li><a href="#tabs-3">Not Started</a></li>
                <li><a href="#tabs-4">Hot Match</a></li>
              </ul>
              <div id="tabs-1">
                <div class="list-league">
                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">5</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/champions.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-2">
                <div class="list-league">
                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool Liverpool  Mu</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow at 5:00PM</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/champions.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">34'</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Today at 5:00PM</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                        <button class="btn-play">

                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0C8.82441 0 6.69767 0.645139 4.88873 1.85383C3.07979 3.06253 1.66989 4.78049 0.83733 6.79048C0.00476617 8.80047 -0.213071 11.0122 0.211367 13.146C0.635804 15.2798 1.68345 17.2398 3.22183 18.7782C4.76021 20.3166 6.72022 21.3642 8.85401 21.7886C10.9878 22.2131 13.1995 21.9952 15.2095 21.1627C17.2195 20.3301 18.9375 18.9202 20.1462 17.1113C21.3549 15.3023 22 13.1756 22 11C22 8.08262 20.8411 5.28473 18.7782 3.22183C16.7153 1.15893 13.9174 0 11 0V0ZM15.55 11.83L9.55 15.83C9.39961 15.929 9.22525 15.9856 9.04535 15.9938C8.86545 16.002 8.68668 15.9614 8.52793 15.8764C8.36917 15.7914 8.23632 15.6651 8.1434 15.5108C8.05047 15.3566 8.00093 15.1801 8 15V7C8.00093 6.81992 8.05047 6.64343 8.1434 6.48917C8.23632 6.33491 8.36917 6.2086 8.52793 6.12359C8.68668 6.03858 8.86545 5.99802 9.04535 6.00619C9.22525 6.01435 9.39961 6.07095 9.55 6.17L15.55 10.17C15.6861 10.2615 15.7977 10.385 15.8748 10.5298C15.9519 10.6745 15.9922 10.836 15.9922 11C15.9922 11.164 15.9519 11.3255 15.8748 11.4702C15.7977 11.615 15.6861 11.7385 15.55 11.83V11.83Z" fill="#FDC400" />
                          </svg>

                        </button>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div id="tabs-3">
                tab3
              </div>
              <div id="tabs-4">
                tab4
              </div>
            </div>
          </div>

          <div id="champions" class="tabcontent">
            <div id="champions-league-tabs">
              <ul class="sub-tabs-nav">
                <li><a href="#tabs-1">All Games</a></li>
                <li><a href="#tabs-2">Live</a></li>
                <li><a href="#tabs-3">Not Started</a></li>
                <li><a href="#tabs-4">Finished</a></li>
              </ul>
              <div id="tabs-1">
                <div class="list-league">
                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/champions.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-2">
                <div class="list-league">
                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="league-item">
                    <div class="league-item-header">
                      <div class="league-info-wrapper">
                        <img src="./images/champions.png" alt="" class="league-image">
                        <div class="league-info">
                          <span class="club-name">England</span>
                          <span class="league-name">Premier League</span>
                        </div>
                      </div>
                    </div>
                    <div class="list-timeline">
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tonight</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-live">24??? LIVE</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score red-score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score red-score">2</span>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item">
                        <div class="time-wrapper">
                          <span class="text-time">01:30</span>
                          <span class="text-day">Tomorrow</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/mu-club.png" alt="" class="club-image">
                              <span class="club-name">Liverpool</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info">
                              <img src="./images/chesea-club.png" alt="" class="club-image">
                              <span class="club-name">Chelsea</span>
                            </div>
                            <span class="score">2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs-3">
                tab3
              </div>
              <div id="tabs-4">
                tab4
              </div>
            </div>
          </div>

          <div id="europa" class="tabcontent">
            europa content
          </div>

          <div id="premier" class="tabcontent">
            premier content
          </div>
          <div id="la-liga" class="tabcontent">
            la liga content
          </div>
          <div id="bundesliga" class="tabcontent">
            bundesliga content
          </div>
          <div id="seria" class="tabcontent">
            seria content
          </div>
          <div id="ligue-1" class="tabcontent">
            ligue-1 content
          </div>
          <div id="worldcup" class="tabcontent">
            worldcup content
          </div>
        </div>
        <div class="right-content">
          <div class="top-player__wrapper">
            <h3 class="top-player__title">Top Players</h3>
            <span class="top-player__description">Best rated players from recent matches</span>
            <div class="top-player__list-player">
              <div class="player-item">
                <div class="player-info">
                  <span class="number">1</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">2</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">3</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">4</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">5</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">6</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">7</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">8</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
              <div class="player-item">
                <div class="player-info">
                  <span class="number">9</span>
                  <div class="player-detail">
                    <div class="player-image-wrapper">
                      <img src="./images/player.png" alt="" class="player-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                    </div>
                    <div class="player-description">
                      <a href="#" target="">
                        <span class="player-name">Cody Gakpo</span>
                      </a>
                      <span class="club-name">Liverpool</span>
                    </div>
                  </div>
                </div>
                <span class="score">9.8</span>
              </div>
            </div>
          </div>

          <div class="football-ranking">
            <div class="football-ranking__header">
              <div class="league-info">
                <img src="./images/all.png" alt="" class="league-image" id="league-ranking-image" />
                <span class="league-name" id="league-ranking-name">All League</span>
              </div>
              <button class="btn-league-dropdown" id="btn-league-ranking-dropdown">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_6031)">
                    <path d="M8 10L12 14L16 10" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_1_6031">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </button>
              <div class="list-league-ranking-dropdown">
                <button class="league-ranking-item">
                  <img src="./images/all.png" alt="" />
                  <span>All League</span>
                </button>
                <button class="league-ranking-item">
                  <img src="./images/champions.png" alt="" />
                  <span>Champions League</span>
                </button>
                <button class="league-ranking-item">
                  <img src="./images/europa.png" alt="" />
                  <span>UEFA Europa League</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/premier.png" alt="" />
                  <span>Premier League</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/la-liga.png" alt="" />
                  <span>La Liga</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/bundesliga.png" alt="" />
                  <span>Bundesliga</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/seria.png" alt="" />
                  <span>Serie A</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/ligue-1.png" alt="" />
                  <span>Ligue 1</span>
                </button>

                <button class="league-ranking-item">
                  <img src="./images/worldcup.png" alt="" />
                  <span>World Cup</span>
                </button>
              </div>
            </div>
            <div class="football-ranking__table">
              <div class="table-heading">
                <div class="column-15 text-left">Pos</div>
                <div class="column-55 text-left">Club</div>
                <div class="column-10 text-center">PI</div>
                <div class="column-10 text-center">GD</div>
                <div class="column-10 text-center">Pts</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">1</span>
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 3L2.25 7.5H9.75L6 3Z" fill="#38A169" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">2</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">3</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">4</span>
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 3L2.25 7.5H9.75L6 3Z" fill="#38A169" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">5</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">6</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">5</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">6</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">5</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">6</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">5</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">6</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">5</span>
                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L2.25 4.5H9.75L6 9Z" fill="#E53E3E" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
              <div class="table-row">
                <div class="column-15 text-center">
                  <div class="pos-wrapper">
                    <span class="text-pos">6</span>
                    <span class="dot">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="6" height="6" rx="3" fill="#A0AEC0" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="column-55 text-left">
                  <div class="club-info">
                    <img src="./images/mu-club.png" alt="">
                    <span class="club-name">Man City</span>
                  </div>
                </div>
                <div class="column-10 text-center">2</div>
                <div class="column-10 text-center">+6</div>
                <div class="column-10 text-center">6</div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="dash-wrapper">
        <img src="./images/dash-horizontal.png" class="dash-horizontal" alt="">
      </div>
    </div>
    <!-- q-and-a-block -->
    <div class="qa-block-wrapper">
      <div class="container">
        <div class="qa-content-wrapper">
          <div class="qa-content">
            <div class="qa-item">
              <h4 class="qa-title">What ???s 2sport.tv</h4>
              <p class="qa-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos
                qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur,
                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                consequatur,
                vel illum qui dolorem eum
                fugiat quo voluptas nulla pariatur?
              </p>
            </div>
            <div class="qa-item">
              <h4 class="qa-title">What ???s 2sport.tv</h4>
              <p class="qa-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos
                qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur,
                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                consequatur,
                vel illum qui dolorem eum
                fugiat quo voluptas nulla pariatur?
              </p>
            </div>
          </div>
        </div>
        <div class="qa-image">
          <img src="./images/qa-image.png" alt="">
        </div>
      </div>
    </div>
    <!-- q-and-a-block -->


    <!-- news -->
    <div class="news-block-wrapper">
      <div class="container">
        <h3 class="page-title">News</h3>
        <div class="list-news">
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-image.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-4.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-3.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-2.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-4.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
          <a href="#" target="">
            <div class="news-item">
              <img src="./images/news-image.png" class="news-image" alt="">
              <div class="news-detail">
                <span class="league-name">Premier League</span>
                <h2 class="news-title">City hit four to see off bournemouth and make it two from two</h2>
                <span class="time">10 hours ago</span>
              </div>
            </div>
          </a>
        </div>
        <button class="btn-load-more">View all</button>
      </div>
    </div>
    <!-- news -->
  </div>
  <?php include "templates/footer.php"; ?>
</body>
</html>