@extends('user.layouts.app')

@section('title', 'AIHUT')

@section('content') 
 <!---------------->
 <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f5f5f5;
        margin: 0;
    }

    .video-container {
        position: relative;
        width: 560px;
        height: 315px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        border-radius: 12px;
        overflow: hidden;
    }

    .thumbnail {
        position: absolute;
        width: 100%;
        height: 100%;
        background: url('https://img.youtube.com/vi/k4B9lrd1fFY/maxresdefault.jpg') center center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .play-button {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        border: none;
        padding: 20px 40px;
        font-size: 24px;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .play-button:hover {
        background-color: rgba(0, 0, 0, 0.9);
    }

    .controls {
        margin-top: 20px;
    }

    .controls button {
        padding: 10px 20px;
        margin: 0 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .controls button:hover {
        background-color: #0056b3;
    }
</style>
 <!-------------->
 <!-- terms Start -->
 <div class="" style="margin-top: 9rem;" id="about">
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="row g-5 ">
            <div class="col-lg-12 " style="margin-top:12vw;" >
                <h6 class="section-title text-start text-uppercase">About Us</h6>
                <h1 class="mb-4"><span class=" text-uppercase">Complete Guide - How to Start Your own Hajj & Umrah Business
                </span></h1>


                <div id="youtubevideoContainer" style="margin-bottom: 5rem;">

                    <div class="d-flex">
                        <div class="video-container">
                            <!-- Default Thumbnail -->
                            <div class="thumbnail" id="thumbnail">
                                <button class="play-button" id="playButton">Play</button>
                            </div>
                        
                            <!-- YouTube Video Embed -->
                            <iframe id="ytplayer" width="560" height="315"
                                src="https://www.youtube.com/embed/k4B9lrd1fFY?enablejsapi=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                style="display: none;">
                            </iframe>
                        </div>
                        
                        <!-- Video Controls -->
                        <div class="controls d-flex justify-content-center align-items-center" style="display: none;" id="videoControls">
                            <button id="pauseButton"><i class="fa-solid fa-pause"></i> Pause</button>
                            <button id="muteButton"><i class="fa-solid fa-volume-xmark"></i> Mute</button>
                            <button id="unmuteButton" style="display: none;"><i class="fa-solid fa-volume-high"></i>  Unmute</button>
                        </div>
                    </div>
                </div>

                <p class="mt-3 mb-3">Greetings! Thanks for expressing your interest in Rahat Group. Hajj & Umrah Sector not only promises great returns but also makes one proud of oneself by serving the guests of ALLAH. Passion, Commitment, Professionalism, and Desire to serve the Guests of ALLAH are a few qualities that one needs to venture in this field. If you wish to make a positive difference in the lives of pilgrims travelling to the holy land and your own get in touch with us.
                </p>
                <p class="mt-3 mb-3">"Rahat Group" is a dynamic organization that Guides & Assists new Travel agencies who wish to enter the field of Religious Tourism Especially Hajj & Umrah. It gives Guidance and Support to all its Travel Partners, assisting them with all aspects of travel namely Airline Tickets, hotel accommodation, transportation, visa, passenger handling, catering, Ziyarats, Laundry etc.

                </p>
                <p class="mt-3 mb-3">Rahat Group is a Four Times National Award Winner for Best Umrah Tour 2015-2016 (Awarded by Minister of Minority Affairs Mr. Mukhtar Abbas Naqvi) also State Award Winner for Best Umrah Tour (Maharashtra State) 2014-15 (Awarded by Consulate General of Afghanistan) also State Award Winner for Best Umrah Tour (Delhi State) 2016-17 (Awarded by Minority Affairs Minister Mr. Mukhtar Abbas Naqvi).
                </p>
                <p class="mt-3 mb-3">Rahat Gorup is an IATA Approved Private Limited Company Registered and recognized by Government of India, Government of Saudi Arabia, Ministry of Hajj & Umrah (Saudi), Ministry of Minority Affairs in INDIA.
                </p>
                <p class="mt-3 mb-3">With a Pan India Presence Rahat Group is your one stop solution for all travel needs. By leveraging our Pan-India presence and focusing on important strategies, you can establish a travel agency that not only has a broad reach but also offers personalized and high-quality services tailored to the diverse needs of travelers across the country
                </p>
                <p class="mt-3 mb-3">
                    For all Travel Consolidators, B2B Agents, B2C and Online Travel <br>
                    Agents who want to start  <br>
                    their own Umrah Business Please connect with Us...
                </p>
                <p class="mt-3 mb-3"></p>
               
               
                <script>
                    let player;
                
                    // Play Button Click Handler
                    document.getElementById('playButton').addEventListener('click', function () {
                        document.getElementById('thumbnail').style.display = 'none';  // Hide thumbnail
                        const iframe = document.getElementById('ytplayer');
                        iframe.style.display = 'block';  // Show video
                        document.getElementById('videoControls').style.display = 'block';  // Show controls
                
                        // Load YouTube Player API
                        setTimeout(initializePlayer, 1000);
                    });
                
                    // Initialize YouTube Player API
                    function initializePlayer() {
                        player = new YT.Player('ytplayer', {
                            events: {
                                'onReady': onPlayerReady
                            }
                        });
                    }
                
                    function onPlayerReady(event) {
                        player.playVideo();  // Autoplay when ready
                
                        // Pause Button
                        document.getElementById('pauseButton').addEventListener('click', function () {
                            player.pauseVideo();
                        });
                
                        // Mute Button
                        document.getElementById('muteButton').addEventListener('click', function () {
                            player.mute();
                            this.style.display = 'none';
                            document.getElementById('unmuteButton').style.display = 'inline-block';
                        });
                
                        // Unmute Button
                        document.getElementById('unmuteButton').addEventListener('click', function () {
                            player.unMute();
                            this.style.display = 'none';
                            document.getElementById('muteButton').style.display = 'inline-block';
                        });
                    }
                
                    // Load YouTube Iframe API
                    let tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    let firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                </script>
                

            </div>

             
           
        </div>
    </div>
   
</div>
<!-- terms End -->
@endsection