<?php

	if ($_GET["page"] == "skills") {
		$pageTitle = "Tower Code | Credentials";
	} else if ($_GET["page"] == "work") {
		$pageTitle = "Tower Code | Work &amp; Projects";	
}

include("inc/header.php");

?>

<div class="<?php if($pageTitle == 'Tower Code | Credentials' || $pageTitle == 'Tower Code | Work &amp; Projects') {echo 'two_wrapper';}?>">

	<div id="cred" class="credentials <?php if($pageTitle == 'Tower Code | Work &amp; Projects') { echo 'off';}?>">

		<div class="paragraph">
			<p class="para">html</p>
			<p class="para">css</p>
			<p class="para">php</p>
			<p class="para">wordpress</p>
			<p class="para">ruby</p>
			<p class="para">python</p>
			<p class="para">objectc</p>
		</div>

		
		<div class="tube first">
          <div class="inner_tube" id="html"></div>
        </div>

        
        <div class="tube inner_css">
          <div class="inner_tube" id="css"></div>
        </div>

        
        <div class="tube inner_php">
          <div class="inner_tube" id="php"></div>
        </div>

        
        <div class="tube inner_wordpress">
          <div class="inner_tube" id="wordpress"></div>
        </div>

        
        <div class="tube">
          <div class="inner_tube" id="ruby"></div>
        </div>

        
        <div class="tube">
          <div class="inner_tube" id="python"></div>
        </div>

        
        <div class="tube last">
          <div class="inner_tube" id="ObjectC"></div>
        </div>

	</div>

	<div class="projects <?php if ($pageTitle == "Tower Code | Credentials") {echo 'off';}?>">
		<div class="image art1">
      <div class="inner_text">
      <p>This was a poster for the Brian Head Art Festival. It became a competition in class to make the best.<p>
      </div>  
    </div>
		<div class="image art2">
      <div class="inner_text">
      <p>This was a poster for younger graphics class on the different aspects of typography<p>
      </div>  
    </div>
		<div class="image art3">
      <div class="inner_text">
      <p>For the 2015 Skills USA t-shirt competition, this was my final design, which won second.<p>
      </div>  
    </div>
		<div class="image art4">
      <div class="inner_text">
      <p>The 2016 Skills USA t-shirt competition saw me enter this final design, ultimately winning third.<p>
      </div>  
    </div>
		<div class="image art5">
      <div class="inner_text">
      <p>As one of the final graphics projects I ever did, this indesign layout was a cover for a lyric game the class had participated in.<p>
      </div>
    </div>
    <div class="image art6">
      <div class="inner_text">
        <p>This screenshot is of the first flash animation we had done in graphics sophomore year.<p>
      </div>
    </div>
	</div>

</div>

	<div class="description">
		
		<p class="desc">
			
			<?php 
				if($pageTitle == "Tower Code | Credentials") {
					echo "These are visual representations
          of the code that I have studied before, or
          are in the process of learning";
				} else if ($pageTitle == "Tower Code | Work &amp; Projects") {
					echo "Here are some of the projects that I have worked on, or are working on as of the moment. This page will be updated regularly.";
				}
			?>

		</p>

	</div>

	<div class="medals <?php if($pageTitle == 'Tower Code | Work &amp; Projects') {
		echo 'off';
		}?>">

        <div class="wrapper3 gutter">

          <div class="flipContainer" ontouchstart="this.classList.toggle('hover')">
            <div class="flipper">
              <div class="front silver"></div>

              <div class="back tshirt">
                <p>2015 SkillsUSA T-shirt Design (State)</p>
              </div>
            </div>
          </div>

          <div class="flipContainer" ontouchstart="this.classList.toggle('hover')">
            <div class="flipper">
              <div class="front bronze"></div>

              <div class="back">
                <p>2016 SkillsUSA T-shirt Design (State)</p>
              </div>
            </div>
          </div>

          <div class="flipContainer" ontouchstart="this.classList.toggle('hover')">
            <div class="flipper">
              <div class="front gold"></div>

              <div class="back web">
                <p>2016 SkillsUSA Web Design Competition (State), Partner: Colton Fitzgerald</p>
              </div>
            </div>
          </div>

        </div>

        <div class="flipContainer4" ontouchstart="this.classList.toggle('hover4')">
          <div class="flipper4">
            <div class="front4 natBronze"></div>

            <div class="back4 natweb">
              <p>2016 SkillsUSA Web Deisng Competition (Nationals), Partner: Colton Fitzgerald</p>
            </div>
          </div>
        </div>

	</div>


<?php 

	include("inc/footer.php");

?>