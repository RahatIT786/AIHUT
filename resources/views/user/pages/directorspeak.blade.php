@extends('user.layouts.app')



@section('content')

<div class="template-home-wrapper" style="padding-top:100px !important">

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
        background: url('https://img.youtube.com/vi/tvpel2LeCjE/hqdefault.jpg') center center/cover no-repeat;
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

	<div class="page-content-home-page">										
		<div data-elementor-type="wp-page" data-elementor-id="17066" class="elementor elementor-17066">
        <div class="elementor-element elementor-element-4fc85d4 e-flex e-con-boxed e-con e-parent" data-id="4fc85d4" data-element_type="container">

            <div class="dspeak d-flex justify-content-center align-items-center" style="width: 100%; ">
                                    
                <div style="width: 50%; box-shadow: 4px 4px 4px rgba(0,0,0,0.3),  -4px -4px 4px rgba(0,0,0,0.3); padding: 30px 20px; border-radius: 10px; margin-top: 30vw;">
                 <p>Dear RAHAT Community,</p>
                 <br>
                 <p>I am delighted to address you today as we reflect on our journey and look ahead to the promising future that lies before us. Over the years, our team's dedication and hard work have propelled us to new heights, and I am immensely proud of what we have achieved together.</p>
                 <br>
                 <p>Our commitment to excellence remains unwavering. In an ever-evolving landscape, we continue to adapt, innovate, and exceed expectations. Our success is a testament to the collective efforts of each team member, and I want to express my gratitude for your passion and perseverance.</p>
                 <br>
                 <p>As we set sail into the future, our vision remains clear: to be at the forefront of Travel Industry and in Particular the <strong>Hajj & Umrah Industry ,</strong> delivering unparalleled value to our clients and stakeholders. We will leverage emerging technologies, foster a culture of continuous learning, and uphold the highest standards of integrity.</p>
                 <br>
                 <p>I am excited about the opportunities that lie ahead. <strong>The challenges we face are opportunities for growth,</strong> and I am confident that, together, we will overcome them. Our commitment to sustainability, diversity, and social responsibility will remain integral to our identity, reflecting our values as an organization.</p>
                    <br>
                 <p>In conclusion, I invite each one of you to embrace the journey ahead with enthusiasm and determination. Let us continue to innovate, collaborate, and strive for excellence in everything we do. Together, we will shape a future that reflects the extraordinary potential within our organization.</p>
                 <br>
                 <p>Thank you for your hard work, dedication, and unwavering support.</p>
                 <br>
                 <P>Mr. Imrans Interview on YouTube....</P>
                 <br>
                     {{-- <p><a href="https://www.youtube.com/playlist?list=PL2d-OLJrD0XBVTu0E6lZWqfLvqVH8FWQ2">Journey of RAHAT GROUPs </a></p> --}}
                     <br>

                     <div id="youtubevideoContainer" style="margin-bottom: 5rem;">

                      <div class="d-flex">
                          <div class="video-container">
                              <!-- Default Thumbnail -->
                              <div class="thumbnail" id="thumbnail">
                                  <button class="play-button" id="playButton">Play</button>
                              </div>
                          
                              <!-- YouTube Video Embed -->
                              <iframe id="ytplayer" width="560" height="315"
                                  src="https://www.youtube.com/embed/tvpel2LeCjE?enablejsapi=1"
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
                 <p><a href="https://www.youtube.com/playlist?list=PL2d-OLJrD0XBVTu0E6lZWqfLvqVH8FWQ2">Director Imran Rahat Shaikh (Click Here To Watch Video)</a></p>
                 <br>
                 <p>Sincerely,</p>
                 <br>
                 <p>Imran Rahatullah Shaikh</p>
                 <p>Managing Director   </p>
                 <br>
                 <p>Rahat Group Of Companies</p>
                </div>
             </div>
		 <div class="e-con-inner">
			<div class="elementor-element elementor-element-00f9a3a e-con-full e-flex e-con e-child" data-id="00f9a3a" data-element_type="container">
					<div class="elementor-element elementor-element-3ef1bb4 elementor-widget elementor-widget-tts" data-id="3ef1bb4" data-element_type="widget" data-widget_type="tts.default">
                        <div class="elementor-widget-container">
                           
		
                        </div>
				</div>
			</div>
	    </div>
	   </div>
	</div>
  </div>
</div>
@endsection

