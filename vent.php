<?php include 'header.php' ?>

<div class="direct row twelve columns">

	<p class=" alt">PROJECTS / Vent</p>
</div>

<div class="row">
	<div class="twelve columns">

		<img src="/images/vent1.jpg" alt="">
		<div class="dot"></div>
	</div>

</div>

<div class="row">

	<?php
	$title = 'VENT';
	$tag1 = 'physical';
	$tag2 = 'digital';
	$tag3 = 'sound design';
	$name1 ='with Joanna Stronska & Connal McCullogh';
	$season ='Autumn / Winter 2014';
	$focus ='Interaction, Sound, Industrial, 3D Design';
	$desc ='A physical / digital product experience.  Tell your secrets and turn the knob to manipulate the sound.';
	$videourl = '<a href="https://vimeo.com/120887185" target="_blank">VIDEO</a>';

	include 'sidebar.php' 
	?>

	<div class="six columns">
		<h5>BRIEF</h5>
		<p>The aim of this project was to create a physical/digital product, which satisfied the need to share secrets.
			<h5>RESEARCH</h5>
			<p>We set out to gain an understanding of what leads us to keeping secrets, we started by looking at why it can
				be difficult to discuss these with others. We talked with people about how they felt about the subject. Most of 
				the conversations we had shared the same outcome. We found that secrets, by definition, are something completely
				personal to the individual, and in some cases these are shared with others. <br><br>
				Bringing secrets and technology together was an abstract idea. If we were to understand secrets, we’d have to
				understand the relationship we have with technology and product. Vent was born from this need for exploration.</p>
				<h5>IDEAS</h5>
				<p>We wanted the ability to share our secrets in a manner that still keeps them to ourselves. We wanted to simulate the
					feeling of telling a secret to a person we trust, expecting that secret to be kept. Our solution was to allow the user 
					to manipulate the sound and would fade over time, giving the sense of security and release.</p>
					<img src="/images/whiteboard.jpg"  alt="">
					<h5>SOUND</h5>
					<p>Vent was an opportunity for me to explore Pure Data (a visual programming language, for sound). My previous experience
						with MAX/MSP (also a visual programming language) meant I was able to quickly grasp the workflow, and allowed me to 
						put together prototypes quickly. I experimented with how the sound can change over time, and be controlled by the user
						using various sensors. For this, the project adopted an arduino to bring together the physical interaction with the sound.</p>
						<img src="images/ventpd.png" alt="">
						<h5>INTERACTION</h5>
						<p>In order to encourage an experience driven by our own secrets, the interaction with the device needed to be as seamless
							and intuitive as possible. This was so the user easily understood what would happen once they spoke to the device. We looked
							at several interactions, such as cupping the device (as you would to whisper into someone ear) and using proximity sensors
							to establish and initiate the experience. Testing these out with unsuspecting users showed that these interactions offered
							no affordance and left the user confused. We found that the action of turning a knob or platform would be better suited.
							We also added a button, in order to suggest it was to be pushed to begin the experience.</p> 
							<img src="images/proto.jpg" alt="">
							<h5>PHYSICAL</h5><p>
							Now we had the fundamental experience of Vent realised, it was time to bring it together into the physical world. The device
							had to be stable. We wanted Vent to reflect the personality of those we feel comfortable sharing our own secrets with. <br><br>
							We looked at creating a circular shape with two parts. The top half would be the knob. Turning this would manipulate the sound. 
							The bottom half would act as a solid base. This solution didn't have the stability we sought for the experience. This process of
							evaluating the shapes and interactions led us to our final solution, a solid base with a circular platform, at the top, to act as the knob.<br><br>
							Prototypes considered and reflecting what we’ve learned throughout the process, we were ready to finalise the design. We sourced some 
							beautiful black walnut from a local supplier which we intended to mill. I went ahead and created a one-piece design in Rhino, modelled
							from our final prototype. This was milled and finished by hand. I designed the enclosure with the intention of snuggly fitting each
							component. The faceplate was black acrylic, laser cut for the components, such as the knob and button. Each one of us had to assist 
							the tedious job of bending the acrylic, with assistance from a heat gun. We shaped the knob from a cut-off from the black walnut,
							drilled the recess for the potentiometer to fit in. </p>
							<img src="images/foam.jpg" alt=""><h5>PRODUCT</h5>
							<p>After placing all the components together, we were satisfied our solution. The video demonstration is available <a href="https://vimeo.com/120887185" targer="_blank">here</a>. <br><br>
								Vent was displayed at the Atelier Whisper exhibition at DJCAD, Dundee in December 2014.</p>
								<img src="/images/ventlocation.jpg">





							</div>
							<div class="three offset-by-three columns"></div>
						</div>

						<?php include 'footer.php' ?>