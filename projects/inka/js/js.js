var store = new Persist.Store('My Application');

// Functions

// Set the according css file
function setColorCss() {
	$("link[href$='_style.css']").attr('href','css/' + store.get("color") + '_style.css');
}

// Before DOM Ready

// If the color is undefined, set default red.
if(store.get("color") == null) {
	store.set("color","red");
}

// Change the CSS file for the set color
setColorCss();

	// DOM Ready
	$().ready(function(){

		// Hide the upcoming states first
		$(".state_2, #comment_1, #comment_2, .feed .message.fades_in").hide();

		// Isotope init
		$(".gallery").imagesLoaded(function() {
			// initialize
			$(".gallery").isotope({
				itemSelector : '.item',
	  		layoutMode : 'masonry',
	  		masonry: {
	  			gutterWidth: 20
	  		}
			});
		});

		// Feed + Gallery expanding
		var feed_active = false;
		$(".feed h2, .gallery h2").click(function(){
			if(!feed_active) {
				// Expanding of feed
				$(".gallery").animate({
					width: "340px",
					}, 800, function(){
						// $(".gallery").removeClass("twelve");
						$(".gallery").addClass("six");
						$(".feed").removeClass("four");
						$(".feed").addClass("ten");
						$(".gallery .item").css("width","160px")
						$(".gallery").isotope( 'reLayout' );
						$(".gallery h2 span").html("&#xe003;")
						$(".feed h2 span").html("");
						$("h2").toggleClass("clickable");
						feed_active = true;
						// Francis' message in feed
						if($(".feed .message.fades_in").not(":visible") && (store.get("user") == "Dean")) {
							$(".feed .message.fades_in").delay(2000).fadeIn(700, function(){
								$(this).css("display","table");
							})
						}
				});
				$(".feed").animate({
					width: "580px"
				}, 800);
			} else {
				// Expanding of gallery
				$(".gallery").animate({
					width: "700px"}, 800, function(){
						$(".gallery").removeClass("six");
						$(".gallery").addClass("twelve");
						$(".feed").removeClass("ten");
						$(".feed").addClass("four");
						$(".gallery .item").css("width","220px")
						$(".gallery").isotope( 'reLayout' );
						$(".gallery h2 span").html("")
						$(".feed h2 span").html("&#xe002;");
						$("h2").toggleClass("clickable");
						feed_active = false;
				});
				$(".feed").animate({
					width: "220px"
				}, 800);
			}
		});

		// Gallery Method/Theme switch
		$(".categories a").click(function(){
			event.preventDefault();
			if(!$(this).hasClass("active")) {
				// Clicked on NOT active
				$(".categories a.active").removeClass("active");
				$(this).addClass("active");
				$(".category_items").hide();
				$(".category_items." + $(this).attr("href")).show();
			}
		})

		// Gallery filtering
		$(".category_items a").click(function(){
			event.preventDefault();
			if($(this).hasClass("active")) {
				$(this).removeClass("active");
				$('.gallery').isotope({ filter: "*"}, function(){
					$('.gallery').isotope("reLayout");
				});
			} else {
				$(".category_items a.active").removeClass("active");
				$(this).addClass("active");
				var filter = $(this).html();
				$('.gallery').isotope({ filter: ".gallery_header, ." + filter}, function(){
					$('.gallery').isotope("reLayout");
				});
			}
		})

		// Live feed Petr's comment
		var store = new Persist.Store('My Application')
		$(".feed .message.petr p").append("<span>\"" + store.get("comment_1") + "\"</span>");

		// Change the user
		$("a:contains('Logout')").click(function(){
			if(store.get("user") == "Petr") {
				store.set("user","Dean");
				store.set("color","blue");
				setColorCss();
			} else {
				store.set("user", "Petr");
			}
		})

		// If there is Petr's comment, show it in the feed
		if(store.get("comment_1") != null) {
			$(".feed .petr").show();
		} else {
			$(".feed .petr").hide();
		}

		// If Dean is logged in
		if(store.get("user") == "Dean") {
			$(".userbox div a.strong").html("Dean Taylor");
			$(".userbox > a img").attr("src","img/avatar/dean_42_left.png");
			$(".state_1").hide();
			$(".state_2").show();
		}

		// Reset the prototype
		$(".prototype_reset").click(function() {
			store.remove("comment_1");
			store.remove("comment_2");
			store.set("user","Petr")
			store.set("color","red")
			location.reload();
		})

		// Listen for keys
		$("html").bind('keypress', function(e) {
			console.log("Keycode of pressed key: " + e.keyCode);
			switch(e.keyCode) {
				case 43:
					store.set("color","red");
				break;
				case 49:
					store.set("color","red");
				break;
				case 283:
					store.set("color","blue");
				break;
				case 50:
					store.set("color","blue");
				break;
				case 353:
					store.set("color","green");
				break;
				case 51:
					store.set("color","green");
				break;
				case 269:
					store.set("color","orange");
				break;
				case 52:
					store.set("color","orange");
				break;

			}
			setColorCss();
		});

		// COMMENTS!

		// Comments prototyping

		// Create new persist.js store
		var comment;

		// Handle the adding of comment
		$(".state_1 a.button").click(function(){
			event.preventDefault();
			comment = $(".state_1 textarea").val();
			$(".state_1 textarea").val("");
			store.set("comment_1",comment);
			$("#comment_1 p").append(store.get("comment_1"));
			$("#comment_1").fadeIn(700).css("display","table");
		})
		$(".state_2 a.button").click(function(){
			event.preventDefault();
			comment = $(".state_2 textarea").val();
			$(".state_2 textarea").val("");
			store.set("comment_2",comment);
			$("#comment_2 p").append(store.get("comment_2"));
			$("#comment_2").fadeIn(700).css("display","table");
		})

		// If there are comments, display them
		if(store.get("comment_1") != null) {
			$("#comment_1 p").append(store.get("comment_1"));
			$("#comment_1").show().css("display","table");
		}
		if(store.get("comment_2") != null) {
			$("#comment_2 p").append(store.get("comment_2"));
			$("#comment_2").show().css("display","table");;
		}

		// Clear the local storage
		$(".prototype_reset").click(function() {
			store.remove("comment_1");
			store.remove("comment_2");
			location.reload();
		})
	});