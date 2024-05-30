// common js

// plugins: overly & parallax
(function($) {
	$.extend({
		ovrly: function(wrapper) {
			var container = wrapper ? wrapper : "body";
			var i = "Please Wait";
			var methods = {
				init: function() {
					$(container).css("position", "relative");

					$(container)
						.find(".overlay-block")
						.remove();
					$(
						'<div class="overlay-block"><h2><i class="fa fa-spinner fa-pulse fa-2x fa-fw d-block mx-auto" aria-hidden="true"></i></h2></div>'
					).appendTo(container);
					// return this;
					$(
						"<style>.overlay-block { position: fixed; height: 100%; width: 100%; top: 0; left: 0; background-color: rgba(30, 30, 30, 0.75); z-index: 999999; color: #fff; }.overlay-block>* { position: absolute; transform: translate3d(-50%, -50%, 0); top: 50%; left: 50%; }</style>"
					).appendTo("body");
				},
				kill: function() {
					$(container)
						.css("position", "")
						.find(".overlay-block")
						.fadeOut(250, function() {
							$(this).remove();
						});
				}
			};

			// init from inside
			// methods.init();
			return methods;
		}
	});

	$.fn.parallax = function() {
		return this.each(function() {
			var $elm = $(this),
				speed = $elm.attr("data-speed") ? $elm.attr("data-speed") : 1.5,
				scale = $elm.attr("data-scale") ? $elm.attr("data-scale") : 1;

			function updateParallax(initial) {
				var $img = $elm.children("img").first(),
					ch = $elm.height(),
					dt = $elm.offset().top,
					db = dt + ch,
					st = $(window).scrollTop(),
					wh = window.innerHeight,
					sp = speed,
					scl = scale,
					wb = st + wh,
					parallax,
					trans;
				if (initial) {
					$img.css("display", "block");
				}
				if (dt < wb) {
					parallax = Math.round((st - dt) / sp + 28);
					trans =
						"translate3d(-50%," +
						parallax +
						"px, 0) scale(" +
						scl +
						")";
				}
				$img.css({ transform: trans });
			}
			$elm.children("img")
				.one("load", function() {
					updateParallax(true);
				})
				.each(function() {
					if (this.complete) {
						$(this).trigger("load");
					}
				});
			$(window).scroll(function() {
				updateParallax(false);
			});
		});
	};
})(jQuery);

function showLoader() {
	$.ovrly().init();
}

function hideLoader() {
	$.ovrly().kill();
}

$(document).on("click", ".reset-wild-tigers", function() {
	showLoader();
	window.location.reload();
});

function getCityList(thisitem , status) {
	var state_id = $(thisitem).val();
	var module_name = $.trim($(thisitem).attr("data-module"));
	var property_db_city = $.trim($(thisitem).attr('data-property-db-city'));
	
	//if (state_id != "") {
		$.ajax({
			type: "POST",
			url: site_url + "city/getCityList",
			data: { state_id: state_id , status: status , property_db_city : property_db_city},
			beforeSend: function() {
				//block ui
				showLoader();
			},
			success: function(response) {
				hideLoader();
				$("#city").html(response);
				$(".city-list").html(response);
				$("#locality").html('<option value="">Select</option>');
				$(".locality-list").html('');
				$(".get-property-atofill-selection").html('');
				if( module_name != "" && module_name != null && module_name == "static_page" ){
					$("#locality").html('');
					getPropertyList(thisitem);
				}
				
			},
			error: function() {
				hideLoader();
			}
		});
	//}
}

function getLocalityDetails(thisitem ,no_select_option= 'yes',no_used_only ='no',status = '',property_status_select_option='no', property_status='' ,agent_database_status_select_option='no', agent_database_status='') {
	var city_id = $(thisitem).val();
	var module_name = $.trim($(thisitem).attr("data-module"));
	var property_db_locality = $.trim($(thisitem).attr('data-property-db-locality'));
	
	//if (city_id != "") {
		$.ajax({
			type: "POST",
			url: site_url + "city/getLocalityList",
			data: { city_id: city_id , 'no_select_option' : no_select_option ,'no_used_only':no_used_only ,'status':status ,'property_status_select_option': property_status_select_option ,'property_status':property_status ,'agent_database_status_select_option':agent_database_status_select_option,'agent_database_status':agent_database_status , 'property_db_locality' : property_db_locality },
			beforeSend: function() {
				//block ui
				showLoader();
			},
			success: function(response) {
				hideLoader();
				$("#locality").html(response);
				$("#locality_id").html(response);
				$("#firm_locality_id").html(response);
				$(".locality-list").html(response);
				if( module_name != "" && module_name != null && module_name == "static_page" ){
					getPropertyList(thisitem);
				}
			},
			error: function() {
				hideLoader();
			}
		});
	//}
}

function ucword( message ){
	var str = '';
	str = message.toLowerCase().replace(/\b[a-z]/g, function(letter) {
	    return letter.toUpperCase();
	});
	return str;
}

function alertifyMessage(type, message) {
	alertify.alert().destroy();
	$('.alertify-notifier').find('.ajs-message').remove();
	message = ucword(message);
	message = message.replace('Otp','OTP');
	switch (type) {
		case "error":
			alertify.notify(message, "error", 5);
			break;
		case "success":
			alertify.notify(message, "blue", 5);
			break;
		case "warning":
			alertify.notify(message, "warning", 5);
			break;
		case "info":
			alertify.notify(message);
			break;
		default:
			alertify.notify(message);
	}
}

//override defaults
if (typeof alertify !== "undefined") {
	alertify.defaults.transition = "slide";
	alertify.defaults.theme.ok = "btn btn-primary";
	alertify.defaults.theme.cancel = "btn btn-danger";
	alertify.defaults.theme.input = "form-control";
}

if (typeof jQuery.validator !== "undefined") {
	jQuery.validator.setDefaults({
		errorPlacement: function(error, element) {
			if (
				element.hasClass("select2") &&
				element.next(".select2-container").length
			) {
				error.insertAfter(element.next(".select2-container"));
			} else if (element.parent(".input-group").length) {
				error.insertAfter(element.parent());
			} else if (element.parent(".input-group-prepend").length) {
				error.insertAfter(element.parent().parent());
			} else if (
				element.prop("type") === "radio" &&
				element.parent(".radio-inline").length
			) {
				error.insertAfter(element.parent().parent());
			} else if (
				element.prop("type") === "checkbox" ||
				element.prop("type") === "radio"
			) {
				if ( element.parents('.list-group').length > 0 || element.parents('.radio-boxes').length > 0 ) {
					error.insertAfter(element.parent().parent().parent());
				} else if (element.parents('.btn-group').length > 0 ) {
					error.insertAfter(element.parent().parent());
				} else  {
					error.appendTo(element.parent().parent());
				}
			} else if (element.prop("type") === "file") {
				error.appendTo(
					element
						.parent()
						.parent()
						.parent()
				);
			} else {
				error.insertAfter(element);
			}
		}
	});

	$.validator.addMethod('filesize', function (value, element, param) {
	    return this.optional(element) || (element.files[0].size <= param)
	}, 'Please Do Not Upload More Than 5 MB.');
	
	$.validator.addMethod(
		"email_regex",
		function(value, element, regexp) {
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
		},
		"Please Enter Valid Email."
	);
	
	$.validator.addMethod(
		"url_regex",
		function(value, element) {
			var re = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
			return this.optional(element) || re.test(value);
		},
		"Please Enter Valid Website."
	);
	
	$.validator.addMethod(
		"noSpace",
		function(value, element) {
			return this.optional(element) || $.trim(value) != "";
		},
		function(params, element) {
			return "Please Enter " + $(element).attr("placeholder");
		}
	);

	$.validator.addMethod(
		"mobile_regex",
		function(value, element, regexp) {
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
		},
		function(params, element) {
			return "Please Enter Valid " + $(element).attr("placeholder");
		}
	);
}

function onlyDecimal(thisitem) {
	var val = $(thisitem)
		.val()
		.trim();

	if (parseInt(val) == 0) {
		var newValue = val.replace(/^0+/, "");
		return $(thisitem).val(newValue);
	}

	if (isNaN(val)) {
		val = val.replace(/[^1-9\.]/g, "");
		if (val.split(".").length > 2) val = val.replace('.', "");
	}
	return $(thisitem).val(val);
}

function onlyNumber(thisitem) {
	var $val = $(thisitem)
		.val()
		.trim()
		.replace(/[^\d]/g, "");
	$(thisitem).val($val);
}

function naturalNumber(thisitem) {
	var $val = $(thisitem)
		.val()
		.trim()
		.replace(/[^\d]/g, "")
		.replace(/^0+/g, "");
	$(thisitem).val($val);
}

function deleteRecord(thisitem, moduleName) {
	//console.log("has");
	alertify.confirm(
		messages["delete_record"],
		messages["confirm_delete_record"],
		function() {
			//user id
			var record_id = $.trim($(thisitem).data("record-id"));

			//delete  url
			var deleteUrl = site_url + moduleName + "/delete/" + record_id;

			//redirt to delete req
			window.location = deleteUrl;
		},
		function() {}
	);
}

function imagePreview(thisitem , file_type = 'image' ) {
	
	var filedId = $(thisitem).attr("id");

	if ($("#" + filedId).valid() == true) {
		//$(this).next('label').text($(this).val().replace(/C:\\fakepath\\/i, ''));

		var input = this;

		if (thisitem.files && thisitem.files[0]) {
			
			var image_type = thisitem.files[0].type;
			
			
			if( ( file_type == 'image' ) &&  ( image_type == "image/jpeg" ) || ( image_type == "image/png" ) || ( image_type == "image/jpg" ) ||(image_type == "application/pdf")){
			
				var reader = new FileReader();
	
				reader.onload = function(e) {
	
					$("." + filedId + "-preview-div").show();
					$("." + filedId + "-preview").show();
					$("." + filedId + "-preview").attr("src", "");
					$("." + filedId + "-preview").attr("src", e.target.result);
					$("." + filedId + "-preview").attr('data-image-name' , thisitem.files[0].name );
				};
	
				reader.readAsDataURL(thisitem.files[0]);
			} else {
				alertifyMessage('error' , messages['invalid-image']);
				$("." + filedId + "-preview-+").hide();
				$("." + filedId + "-preview").attr("src", "");
				$("." + filedId + "-preview").attr('data-image-name' , '');
				
			}
		}
	} else {
		alertifyMessage('error' , messages['invalid-image']);
		$("." + filedId + "-preview-+").hide();
		$("." + filedId + "-preview").attr("src", "");
		$("." + filedId + "-preview").attr('data-image-name' , '');
	}
}

/*function searchAjax(ajaxUrl, ajaxData, pagination = false) {
	var result;
	$.ajax({
		type: "POST",
		url: ajaxUrl,
		async: false,
		data: ajaxData,
		beforeSend: function() {
			//block ui
			showLoader();
		},
		success: function(response) {
			hideLoader();
			if (pagination != false) {
				$(".ajax-view").append(response);
			} else {
				$(".ajax-view").html("");
				$(".ajax-view").html(response);
			}
			result = response;
		},
		error: function() {
			hideLoader();
		}
	});
	return result;
}*/

var check_ajax_false  = false;
function searchAjax(ajaxUrl, ajaxData, pagination = false, additional_class_for_pagination = 'ajax-view') {
	
	var element = (typeof additional_class_for_pagination == 'object') ? $(additional_class_for_pagination) : $("." + additional_class_for_pagination);
	
	var result;
	if( check_ajax_false != true ){
	
		$.ajax({
			type: "POST",
			url: ajaxUrl,
			data: ajaxData,
			beforeSend: function() {
			//block ui
			showLoader();
			check_ajax_false = true;
		},
		success: function(response) {
			hideLoader();
			if (pagination != false) {
				element.append(response);
			} else {
				element.html("");
				element.html(response);
			}
				result = response;
				check_ajax_false = false;
				return true;
		},
		error: function() {
			hideLoader();
			check_ajax_false = false;
			}
		});
		return true;
	} else {
		return false;
	}
}


var multipleImageName = [];
var single_image_field_name = ["gallery_img"];
function multipleImagePreview(thisitem, placeToInsertImagePreview) {
	var invalidImage = false;
	var field_id = $(thisitem).attr("id");
	var field_name = $(thisitem).attr("data-field-name");

	$("." + field_id + "-preview-div").html("");
	if (thisitem.files) {
		var filesAmount = thisitem.files.length;

		for (i = 0; i < filesAmount; i++) {
			var f = thisitem.files[i];
			var reader = new FileReader();

			if (
				thisitem.files[i].type == "image/jpg" ||
				thisitem.files[i].type == "image/png" ||
				thisitem.files[i].type == "image/jpeg"
			) {
				reader.onload = (function(theFile) {
					return function(e) {
						var imageName = "";
						var imageName = theFile.name;
						var imageHtml = "";

						if (imageName != "") {
							multipleImageName.push(imageName);
							$("#final_selected_image").val(
								multipleImageName.toString()
							);
						}
						imageHtml =
							'<div class="col-lg-4 mb-5 "><div class="img-gallery"><img src="' +
							event.target.result +
							'" alt="" srcset="" class="img-fluid gallery_img-preview"><button type="button" class="button-gallery btn btn-danger rounded" onclick="removeImage(this)" data-field-name="' +
							field_name +
							'" data-preview-name="' +
							imageName +
							'"><i class="fas fa-times cancel-icon"></i></button></div></div>';
						$("." + field_id + "-preview-div").append(
							$.parseHTML(imageHtml)
						);
					};
				})(f);
			} else {
				invalidImage = true;
			}

			reader.readAsDataURL(thisitem.files[i]);
		}

		$("#final_selected_image").val(multipleImageName.toString());

		if (invalidImage != false) {
			$("#" + field_id).val("");
			$("." + field_id + "-preview-div").hide();
			$("." + field_id + "-preview-div").html("");
			alertifyMessage("error", messages["invalid-image"]);
		} else {
			$("." + field_id + "-preview-div").show();
		}
	}
}

function removeImage(thisitem) {
	alertify.confirm(
		messages["remove_image"],
		messages["delete-image-msg"],
		function() {
			//console.log($(thisitem).attr('data-preview-name'));
			var image_name = $(thisitem).attr("data-image-name");
			var module_name = $(thisitem).attr("data-module-name");
			var record_id = $(thisitem).attr("data-record-id");
			var field_name = $(thisitem).attr("data-field-name");

			if (image_name != "" && image_name != null) {
				$.ajax({
					type: "POST",
					dataType: "json",
					url: site_url + "product/removeUploadedFile",
					async: false,
					data: {
						image_name: image_name,
						module_name: module_name,
						record_id: record_id,
						field_name: field_name
					},
					beforeSend: function() {
						//block ui
						//showLoader();
					},
					success: function(response) {
						//hideLoader();
						//window.location.reload()
						console.log(response);
					},
					error: function() {
						//hideLoader();
					}
				});
			}

			//console.log(field_name);
			//console.log(single_image_field_name);
			//console.log($.inArray(field_name, single_image_field_name));
			if ($.inArray(field_name, single_image_field_name) !== -1) {
				$(thisitem)
					.parents(".img-gallery")
					.parent()
					.remove();
				$("input[name='" + field_name + "']").val("");
			} else {
				console.log("remopve unuploaded image");
				//console.log("input[name='" + field_name + "']");
				var preview_image_name = $(thisitem).attr("data-preview-name");

				$(thisitem)
					.parents(".img-gallery")
					.parent()
					.remove();
				if (preview_image_name != "") {
					multipleImageName.splice(
						$.inArray(preview_image_name, multipleImageName),
						1
					);
				}
				console.log($(thisitem).attr("data-preview-name"));
				//console.log(multipleImageName);
				$("#final_selected_image").val(multipleImageName.toString());
			}
		},
		function() {}
	);
}

// boundry -------------------------------------------------------------------------------------------------------

// designers
function menuDrop() {
	if (window.innerWidth > 991) {
		$(
			".twt-navbar .nav-item.dropdown, .twt-navbar .dropdown-submenu, .navbar .nav-items.dropdown, .navbar .dropdown-submenu"
		).hover(
			function() {
				$(this)
					.find(".dropdown-menu")
					.first()
					.stop(true, true)
					.delay(150)
					.fadeIn(100);
			},
			function() {
				$(this)
					.find(".dropdown-menu")
					.first()
					.stop(true, true)
					.delay(100)
					.fadeOut(50);
			}
		);
		$(".twt-navbar .dropdown > a").click(function() {
			location.href = this.href;
		});
	}
}

$(document).ready(function() {
	menuDrop();
	$("#slide-toggle").on("click", function() {
		$("body").toggleClass("nav-slide-open");
	});

	$(function() {
		var current = window.location.href;

		if (current != "") {
			$(".nav-link,.nav-links").each(function() {
				var href = $(this).attr("href");
				if (href == current) {
					$(this).parent().addClass("active");
					
					if( $(this).parent().parent().parent().hasClass('collapse') != false ){
						$(this).parent().parent().parent().addClass('show');
						setTimeout(function(){$('.sb-scrollbar').css('height','468.936px'); $('.sidebar-nav.scrollContainer.sb-container').removeClass('sb-container-noscroll'),3000});
					} else {
						$(this).parent().parent().parent().removeClass('show');		
					}
				}
			});
		}
	});

	$(document).on("click", function(e) {
		// console.log(!$(e.target).is('#slide-toggle, #slide-toggle .fas'), window.innerWidth < 992);
		if (
			window.innerWidth < 992 &&
			!$(e.target).is("#slide-toggle, #slide-toggle .fas")
		) {
			$("body").removeClass("nav-slide-open");
		}
	});

	// sidebar
	$(document).on("click", ".navbar-toggler", function() {
		$("#wrapper").toggleClass("toggled");
	});
	// sidebar sub menu
	$('.sidebar [data-toggle="collapse"]').on("click", function() {
		var current = $(this);
		current
			.parent()
			.siblings()
			.find(".collapse.show")
			.collapse("hide");
	});

	// sidebar close on outside click
	$(document).on("click", function(e) {
		if (
			$(window).innerWidth() < 1200 &&
			!$(e.target).closest("#sidebar").length > 0 &&
			!$(e.target).is(".navbar-toggler")
		) {
			$("#wrapper").removeClass("toggled");
		}
	});

	if (window.location.hash) {
		console.log(window.location.hash);

		if (
			!$('[href="' + window.location.hash + '"]').hasClass("tab-link") &&
			!$('[data-target="' + window.location.hash + '"]').hasClass(
				"tab-link"
			)
		) {
			setTimeout(function() {
				window.scrollTo(0, 0);
			}, 1);
			setTimeout(function() {
				$("html, body").animate(
					{
						scrollTop: $(window.location.hash).offset().top - 96
					},
					1000
				);
			}, 300);
		}
	}

	$('a[href*="#"]').on("click", function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			if ($(document).find(hash).length == 1) {
				if (!$(this).attr("data-toggle")) {
					$("html, body").animate(
						{
							scrollTop:
								$(hash).offset().top -
								$(".navbar").outerHeight() - 55
						},
						800
					);
				}
			} 
	else {
				window.location.href = $(this).attr('href');
			}

		}
	});

	// $(".main-navbar-wrapper").css("min-height", $("#navMain").outerHeight());

	// $(".parallax").parallax();
	// parallax replaced with rellax
	// Accepts any class name
	if (typeof Rellax !== "undefined" && $('.parallax').length > 0) {
		var rellax = new Rellax(".parallax");
	}

	if ($(document).find(".select2").length > 0) {
		$(".select2").select2();
	}

	// slick slider
	$("#header-slider").on("init", function(e, slick) {
		var $firstAnimatingElements = $("div.header-slide:first-child").find(
			"[data-animation]"
		);
		doAnimations($firstAnimatingElements);
	});
	$("#header-slider").on("beforeChange", function(
		e,
		slick,
		currentSlide,
		nextSlide
	) {
		var $animatingElements = $(
			'div.header-slide[data-slick-index="' + nextSlide + '"]'
		).find("[data-animation]");
		doAnimations($animatingElements);
	});
	if ($("#header-slider").length > 0) {
		$("#header-slider").slick({
			autoplay: true,
			autoplaySpeed: 4000,
			dots: false,
			arrows: true,
			// fade: true,
			pauseOnHover: false
		});
	}

	function doAnimations(elm) {
		var animationEndEvents =
			"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
		elm.each(function() {
			var $this = $(this);
			var $animationDelay = $this.data("delay");
			var $animationType = "animated " + $this.data("animation");
			$this.css({
				"animation-delay": $animationDelay,
				"-webkit-animation-delay": $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function() {
				$this.removeClass($animationType);
			});
		});
	}


	$(document).on('change' , '.custom-file-input' , function(e){
	var finput = $(this);
		let filenames = [];
		let files = e.target.files;
		if (files.length > 1) {
			// filenames.push(files.length + " images added");
	        filenames.push("Multiple files added");
	    } else {
	    	for (let i in files) {
	    		if (files.hasOwnProperty(i)) {
	    			filenames.push(files[i].name);
	            }
	        }
	    }
		$(this).siblings(".custom-file-label").html(filenames.join(","));
	});

	// isolated code

	$(".dropdown-submenu > a").on("click", function(e) {
		// console.log("submenu clicked");
		if (window.innerWidth < 992) {
			e.preventDefault();
		}

		var submenu = $(this);
		$(".dropdown-submenu .dropdown-menu").removeClass("show");
		submenu.next(".dropdown-menu").addClass("show");
		e.stopPropagation();
	});

	$(".dropdown").on("hidden.bs.dropdown", function() {
		// hide any open menus when parent closes
		$(".dropdown-menu.show").removeClass("show");
	});
});

$(window).resize(function() {
	setTimeout(function() {
		//console.log("resized to =>", window.innerWidth);
		menuDrop();
	}, 500);
});

$(window).scroll(function() {
	// console.log($(this).scrollTop());
	if ($(this).scrollTop() > 100) {
		$(".twt-navbar").addClass("fixed");
	} else {
		$(".twt-navbar").removeClass("fixed");
	}
});

// $(function() {
// 	$('[data-toggle="tooltip"]').tooltip();
// });

$(document).on("keypress", function(e) {
	if (e.keyCode == 13 && $("input:focus").val() != "") {
		$("input:focus")
			.parents("#searchFilter")
			.find('[onclick*="filterData()"]')
			.click();
	}
});

function amtInWords(D) {
    var S = new Array(20); var M = new Array(8); var I = new Array(6); var T;
    var E, B, R, G;
    S[1] = ""; S[2] = "One"; S[3] = "Two"; S[4] = "Three"; S[5] = "Four"; S[6] = "Five"; S[7] = "Six"; S[8] = "Seven"; S[9] = "Eight"; S[10] = "Nine"; S[11] = "Ten"; S[12] = "Eleven"; S[13] = "Twelve"; S[14] = "Thirteen"; S[15] = "Fourteen"; S[16] = "Fifteen"; S[17] = "Sixteen"; S[18] = "Seventeen"; S[19] = "Eighteen"; S[20] = "Ninteen"; M[1] = "Twenty"; M[2] = "Thirty"; M[3] = "Fourty"; M[4] = "Fifty"; M[5] = "Sixty"; M[6] = "Seventy"; M[7] = "Eighty"; M[8] = "Ninety"; I[1] = "Hundred"; I[2] = "Thousand"; I[3] = "Lac"; I[4] = "Crore"; I[5] = "Arab"; I[6] = "Kharab"; var O = isNaN(D); if (isNaN(D)) { return "Invalid amount" }
    if (D >= 1000000000000) { return "Amount to high." }
    if (D == 10000000000000) { D = 9999999999999.99 }
    if (D == 0) { return "" }
    R = (D - Math.round(D)) * 100; R = Math.round(R); if (R < 0) { R = 100 + R }
    if (R == 0) { D = D } else { D = Math.round(D - (R / 100)) }
    B = ((String)(D)).length; if (B == 1) { var F = parseInt(D) + 1; T = S[F] } else {
        for (E = B; E > 0; E--) {
            if (E == 13 || E == 12) { G = parseInt(D / 100000000000); D = parseInt(D % 100000000000); if (G == 0) { T = T } else { if (G < 20) { T = S[G + 1] + " " + I[6] } else { T = M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[6] } } } else {
                if (E == 11 || E == 10) { G = parseInt(D / 1000000000); D = parseInt(D % 1000000000); if (G == 0) { T = T } else { if (G < 20) { if (T == null) { T = S[G + 1] + " " + I[5] } else { T = T + " " + S[G + 1] + " " + I[5] } } else { if (T == null) { T = M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[5] } else { T = T + " " + M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[5] } } } } else {
                    if (E == 9 || E == 8) {
                        var C = D / 10000000; if ((C + "").indexOf("e-7") != -1) { G = 0 } else { G = parseInt(C) }
                        D = parseInt(D % 10000000); if (G == 0) { T = T } else { if (G < 20) { if (T == null) { T = S[G + 1] + " " + I[4] } else { T = T + " " + S[G + 1] + " " + I[4] } } else { if (T == null) { T = M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[4] } else { T = T + " " + M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[4] } } }
                    } else { if (E == 7 || E == 6) { G = parseInt(D / 100000); D = (D % 100000); if (G == 0) { T = T } else { if (G < 20) { if (T == null) { T = S[G + 1] + " " + I[3] } else { T = T + " " + S[G + 1] + " " + I[3] } } else { if (T == null) { T = M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[3] } else { T = T + " " + M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[3] } } } } else { if (E == 5 || E == 4) { G = parseInt(D / 1000); D = (D % 1000); if (G == 0) { T = T } else { if (G < 20) { if (T == null) { T = S[G + 1] + " " + I[2] } else { T = T + " " + S[G + 1] + " " + I[2] } } else { if (T == null) { T = M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[2] } else { T = T + " " + M[parseInt(G / 10) - 1] + " " + S[(G - parseInt(G / 10) * 10) + 1] + " " + I[2] } } } } else { if (E == 3) { G = parseInt(D / 100); D = (D % 100); if (G == 0) { T = T } else { var F; F = parseInt(G) + 1; if (T == null) { T = S[F] + " " + I[1] } else { T = T + " " + S[F] + " " + I[1]; } } } else { if (E == 2) { D = parseInt(D); if (D < 20) { var F = parseInt(D) + 1; if (T == null) { T = S[F]; } else { T = T + " " + S[F]; } } else { var J = parseInt(((D / 10) - 1)); var I = (D % 10) + 1; if (T == null) { T = M[J] + " " + S[I]; } else { T = T + " " + M[J] + " " + S[I]; } } } } } } }
                }
            }
        }
    }
    if (R == 0) { T = '<span class="rupee-icon"></span>' + T; } else { if (T == "") { T = "Paise "; } else { T = '<span class="rupee-icon"></span>' + T + " And Paise"; } }
    if (R < 20) { T = T + " " + S[R + 1];} else { var M = parseInt(((R / 10) - 1)); var A = parseInt((R % 10)) + 1; T = T + " " + M[M] + " " + S[A] }
    T = T + " Only"; return T
}


function formatMoney(thisitem,status) {
	var val = $(thisitem).val().trim().split(',').join('');

	var length = val.length
	
	if (!isNaN(val) && val != '') {
		var formatted = new Intl.NumberFormat('en-IN').format(val)
		
		$(thisitem).val(formatted);
		if (length > 9) {
			var division = Math.pow(10, 9)
			var newVal = val/division;
			if( ( status != null ) && ( status != '' ) ){
				$('.change-price-amount').html(parseFloat(newVal.toFixed(2)) + ' Arab');
			}
		} else if (length > 7) {
			var division = Math.pow(10, 7)
			var newVal = val/division;
			if( ( status != null ) && ( status != '' ) ){
				$('.change-price-amount').html(parseFloat(newVal.toFixed(2)) + ' Crore');
			}
		} else if (length > 5) {
			var division = Math.pow(10, 5)
			var newVal = val/division;
			if( ( status != null ) && ( status != '' ) ){
				$('.change-price-amount').html(parseFloat(newVal.toFixed(2)) + ' Lac');
			}
		} else {
			if( ( status != null ) && ( status != '' ) ){
				$('.change-price-amount').html(formatted);
			}
		}
	} else {
		$(thisitem).val('');
	}
}

function formatMoneyBugetRange(thisitem,status) {
	var val = $(thisitem).val().trim();	
	var value_budget;
	
	if(val.indexOf('-') !== -1){
		var value_budget = val.split("-");
		value_budget = value_budget.slice(0, 2);

	} else {
		var value_budget = $(thisitem).val().trim().split(',').join('');
	}
	
	if (val != '') {
		if(Array.isArray(value_budget)){
			var formattedValue = [];
			$.each(value_budget, function(index, val){
				var val = val.trim().split(',').join('');
				if(!isNaN(val) && val != ''){
					var formatedValue = new Intl.NumberFormat('en-IN').format(val);
					formattedValue.push(formatedValue);
				} else {
					formattedValue.push('');
				}
			})
			$(thisitem).val(formattedValue.join('-'));
			
		} else if(!isNaN(value_budget)) {
			var formatted = new Intl.NumberFormat('en-IN').format(value_budget)
			$(thisitem).val(formatted);
		}
		
	} else {
		$(thisitem).val('');
	}
}

// $(document).ready(function () {
// 	$.extend($.fn.datetimepicker.Constructor.Default, {
// 		icons: {
// 			time: 'far fa-clock',
// 			date: 'far fa-calendar',
// 			up: 'fas fa-arrow-up',
// 			down: 'fas fa-arrow-down',
// 			previous: 'fas fa-chevron-left',
// 			next: 'fas fa-chevron-right',
// 			today: 'far fa-calendar-check-o',
// 			clear: 'far fa-trash',
// 			close: 'far fa-times'
// 		}
// 	});
// });

function getLocalityList(thisitem){
	$('#locality').val('');
	$('#firm_locality').val('');
	var city_id = $(thisitem).val();
	console.log('comman');
	$.ajax({
		url: site_url + 'property/getLocalityList',
		type: 'post',
		data: { 'city_id' : city_id },
		beforeSend: function() {
			showLoader();
		},
		success: function (response, status) {
			hideLoader();
			$('#locality-filter').html('');
			$('#locality-filter').html(response);
			$('.locality-filter').html('');
			$('.locality-filter').html(response);
		}
	});	
}

function setLocalityValue(thisitem){
	$('#locality').val($(thisitem).html());
	$('#locality-filter').hide();
	$('.locality').val($(thisitem).html());
	$('.locality-filter').hide();
	autoGenerateAdditionalInfo();
}

function setProjectNameValue(thisitem){
	$('#project_name').val( $(thisitem).html() );
	$('#project-name-filter').hide();
}



// crop image params: input element, wrapper for output, crop ratio(number) eg. 1/1, 16/9, 4/3 etc
function cropImageInit(inputId, resultId, cropRatio) {
        
	if ($(document).find('#modalCropImage').length < 1) {
		var cropperModal = `<div class="modal fade" id="modalCropImage" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalLabel">Crop Image</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">Ã—</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="img-container">
												<canvas id="canvas" class="border">
													Your browser does not support the HTML5 canvas element.
												</canvas>
											</div>
										</div>
										<div class="modal-footer">
											<button id="btnCrop" type="button" class="btn btn-secondary" data-dismiss="modal">Crop</button>
										</div>
									</div>
								</div>
							</div>
							<style>
								#canvas {
									background-color: #ffffff;
									cursor: default;
									width: 100%;
								}
								#canvas img {
									width: 100%;
								}
							</style>`;
		$(cropperModal).appendTo('body');
	}
	
	var canvas  = $('#canvas');
	var context = canvas.get(0).getContext("2d");
	var $result = $(resultId);
	
	if (inputId.files && inputId.files[0]) {
		if ( inputId.files[0].type.match(/^image\//) ) {
			// $result.empty();
			
			$('#modalCropImage').modal({
				backdrop: 'static',
				keyboard: false,
			});
			canvas.cropper('destroy');
			var reader = new FileReader();
			reader.onload = function(evt) {
				var img = new Image();
				img.onload = function() {
					context.canvas.height = img.height;
					context.canvas.width  = img.width;
					context.drawImage(img, 0, 0);

					var cropper = canvas.cropper({
						aspectRatio: cropRatio,
						viewMode: 2
					});
					
						   
					$('#btnCrop').click(function() {
						// Get a string base 64 data url
						$result.empty();
					   
						var croppedImageDataURL = canvas.cropper('getCroppedCanvas').toDataURL("image/jpeg", 0.65);

						$result.append( $('<img>').attr({
							'src': croppedImageDataURL,
							'class': 'img-fluid',
						}));

						$(resultId +'_crop_image').val( croppedImageDataURL );
						$(inputId).siblings(".custom-file-label").html(inputId.files[0]["name"]);
						setTimeout(() => {
							$(document).find('#modalCropImage').remove();
						}, 1000);

					});

					// $('#btnRestore').click(function() {
					//     canvas.cropper('reset');
					//     $result.empty();
					// });
				};
				img.src = evt.target.result;
			};
			reader.readAsDataURL(inputId.files[0]);
		} else {
			// alert("Invalid file type! Please select an image file.");
			$result.find('.img-fluid').attr({
				'src': '../assets/images/home-page-dummy.jpg',
			});
			$(inputId).siblings(".custom-file-label").html("");
			alertifyMessage("error", "Invalid file type! Please select an image file.");
		}
	} else {
		// alert('No file(s) selected.');
		alertifyMessage("error", "No file(s) selected.");
	}

	
}


function convertValueInIndianCurrency( value ){
	value = value.toString();
	var lastThree = value.substring(value.length-3);
	var otherNumbers = value.substring(0,value.length-3);
	if(otherNumbers != '')
	    lastThree = ',' + lastThree;
	var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;

	return res;
}

$.validator.addMethod( "validateCity", function(value, element) {
	var result = true;
	ajaxResponse = $.ajax({
		type: "POST",
		async: false,
		url: site_url + "city/validate_city_name",
		dataType: "json",
		data: {
			city_name : $.trim($("[name='city_name']").val()),
			city_id :  ( ( $.trim($("[name='city_id']").val()) != null ) ? $.trim($("[name='city_id']").val()) : '' ) ,
		},
		success: function(response) {

			if (response.status_code == 101 ) {
				result = false;
			} else {
				result = true;
		    }
		}
	});
	return result;
}, "City Name already exist. Please enter another City Name.");

$.validator.addMethod( "validateLocality", function(value, element) {
	var result = true;
	ajaxResponse = $.ajax({
		type: "POST",
		async: false,
		url: site_url + "locality/validate_locality_name",
		dataType: "json",
		data: {
			locality_name : $.trim($("[name='locality_name']").val()),
			locality_id :  ( ( $.trim($("[name='locality_id']").val()) != null ) ? $.trim($("[name='locality_id']").val()) : '' ) ,
		},
		success: function(response) {

			if (response.status_code == 101 ) {
				result = false;
			} else {
				result = true;
		    }
		}
	});
	return result;
}, "Locality Name already exist. Please enter another Locality Name.");

$.validator.addMethod( "validateUsername", function(value, element) {
	var result = true;
	ajaxResponse = $.ajax({
		type: "POST",
		async: false,
		url: site_url + "user/validate_username",
		dataType: "json",
		data: {
			username : $.trim($("[name='username']").val()),
			record_id :  ( ( $.trim($("[name='record_id']").val()) != null ) ? $.trim($("[name='record_id']").val()) : '' ) ,
		},
		success: function(response) {

			if (response.status_code == 101 ) {
				result = false;
			} else {
				result = true;
		    }
		}
	});
	return result;
}, "Username already exist. Please enter another Username.");

function getSupervisorList(thisitem){
	var recordId = $.trim( $(thisitem).val() );
	
	$.ajax({
		url: site_url + 'user/getSupervisorList',
		type: 'post',
		data: { 'record_val' : recordId, record_id :  ( ( $.trim($("[name='record_id']").val()) != null ) ? $.trim($("[name='record_id']").val()) : '' ) , },
		beforeSend: function() {
			showLoader();
		},
		success: function (response) {
			hideLoader();
			if( response != '' ){
				$('[name="supervisor"]').html(response);
			}
		
		}
	});
}



$(document).ready(function(){
	if( $('.show-collapse').hasClass('active') == true ){
		$('.show-collapse').parents('.collapse').addClass('show');
	}

})


$(function(){
	console.log($('.collapse').find('.show-collapse').hasClass('active'));
})

$(document).ready(function(){
	$('#example').tooltip({ boundary: 'window' })
});

setInterval(function() {
    $('.alert.alert-dismissible').remove();	
    // loadCars();
}, ( 5 * 1000 ) );


function getAgentList(thisitem, moduleName){

	var recordValue = $.trim( $(thisitem).val() );
	
	if(recordValue == 'custom_agent'){
		$('.custom-agent-div').show();
		$('.select-agent-div').hide();
		return true;
	}else{
		$('.custom-agent-div').hide();
		$('.select-agent-div').show();
	}
	
	$.ajax({
		type: "POST",
		url: site_url + "dashboard/getAgentList",
		data: { recordValue: recordValue, 'module_name' : moduleName },
		beforeSend: function() {
			//block ui
			showLoader();
		},
		success: function(response) {
			hideLoader();
			//console.log(response)
			$("#agent").html('');
			$("#agent").html(response);
		},
		error: function() {
			hideLoader();
		}
	});
}


function openBoostrapModal(modal_id){
	
	$('#' + modal_id ).modal({
	    backdrop: 'static',
	    keyboard: false
	})
	
}
$(document).ajaxComplete(function(event,request,settings){
	if( $.fn.select2 ){
		$('.select2').select2();
	}
});

function removeNumberComma(str){
	var result = '';
	if( str != "" && str != null ){
		result  = str.toString().replace(/,/g, '');	
	}
	
	return result;
	
}

function toDataURL(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    var reader = new FileReader();
    reader.onloadend = function() {
      callback(reader.result);
    }
    reader.readAsDataURL(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}

function dataURItoBlob(dataURI) {
    // convert base64/URLEncoded data component to raw binary data held in a string
    var byteString;
    if (dataURI.split(',')[0].indexOf('base64') >= 0)
        byteString = atob(dataURI.split(',')[1]);
    else
        byteString = unescape(dataURI.split(',')[1]);

    // separate out the mime component
    var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

    // write the bytes of the string to a typed array
    var ia = new Uint8Array(byteString.length);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }

    return new Blob([ia], {type:mimeString});
}

function fileBasename(path) {
	  return path.split('/').reverse()[0];
}


function getPropertyList( thisitem ,property_count= null){
	console.log("getPropertyList");
	if(property_count !="" && property_count!=null){
		$('.display-property-count-master-div').html(property_count);
	}
	
	var purpose = $.trim( $('[name="purpose"]:checked').val() );
	var property_type_id = $.trim( $('[name="property_type_id"]').val() );
	var locality_id = $.trim( $('[name="locality_id[]"]').val() );
	var bhk_selection = $.trim( $('[name="bhk_selection"]:checked').val() );
	var static_record_id = $.trim( $('[name="record_id"]').val() );
	var min_price = $.trim( $('[name="min_price"]').val() );
	var max_price = $.trim( $('[name="max_price"]').val() );
	var city_id = $.trim( $('[name="city_id"]').val() );
	var state_id = $.trim( $('[name="state_id"]').val() );
	var furnished_status = $.trim( $('[name="furnished_status"]').val() );
	var pre_leased_status = $.trim( $('[name="pre_leased_status"]').val() );
	
	if(static_record_id  != "" && static_record_id != null){
	  var property_id = $.trim( $('[name="property_id[]"]').val() );
	}
	
	if(static_record_id != "" && static_record_id != null){
		 var project_advertisement_name = $.trim( $('[name="project_advertisement_name[]"]').val() );
	}
	house_type_array =[];
	$("input:checkbox[name='house_type[]']:checked").each(function(){
		if ($(this).prop("checked") == true) {
			house_type_array.push($(this).val());
		}
	});
	if( ( purpose != '' ) && ( property_type_id != '' ) ){
		$.ajax({
			url: module_url + 'getPropertyList',
			type: 'post',
			data: { 
				'purpose' : purpose, 
				'property_type_id' : property_type_id, 
				'locality_id' : locality_id ,
				'bhk_selection':bhk_selection ,
				'house_type':house_type_array ,
				'static_record_id':static_record_id ,
				'property_id':property_id ,
				'min_price':min_price,
				'max_price':max_price,
				'city_id':city_id,
				'state_id':state_id,
				'project_advertisement_name':project_advertisement_name,
				'furnished_status':furnished_status,
				'pre_leased_status':pre_leased_status,
			},
			dataType:"json",
			beforeSend: function() {
				showLoader();
			},
			success: function (response) {
				hideLoader();
				if(response !="" && response !=null){
					
					if( purpose == "rent" || purpose == "sell" ){
						$('.property-value').html( response.html );
					} else if( purpose == "hot_project") {
						$('.advetiment-list-value').html( response.html );
					} else {
						$('.advetiment-list-value').html( "" );
						$('.property-value').html( "" );
					}
					
					
					if( response.property_count  != "" && response.property_count != null ){
						$('.display-property-count-master-div').html( response.property_count);
					} else {
						$('.display-property-count-master-div').html(0);
					}  
					
				}else{
					if( purpose == "rent" || purpose == "sell" ){
						$('.property-value').html( "" );
					} else if( purpose == "hot_project") {
						$('.advetiment-list-value').html( "" );
					}  else {
						$('.advetiment-list-value').html( "" );
						$('.property-value').html( "" );
					}
					$('.display-property-count-master-div').html(0);
				}
				staticAutoFillSeoDetails();
				
			},
				
		});
	} else {
		if( purpose == "rent" || purpose == "sell" ){
			$('.property-value').html( "" );
		} else if( purpose == "hot_project") {
			$('.advetiment-list-value').html( "" );
			$('.display-furnished-status-div').hide();
		} else {
			$('.advetiment-list-value').html( "" );
			$('.property-value').html( "" );
		}
		$('.display-property-count-master-div').html(0);
		staticAutoFillSeoDetails();	
	}
	
}

function getProjectType( thisitem, source ){
	var recordId = $.trim( $(thisitem).val() );
	
	$.ajax({
		url: site_url + 'project_price/getProjectType',
		type: 'post',
		dataType : 'json',
		data: { 'record_id' : recordId },
		beforeSend: function() {
			showLoader();
		},
		success: function ( response ) {
			hideLoader();
			
			$('[name="property_type"]').val( response.data.propertyTypeName );
			
			if( source == 'add' ){
				$('[name="total_no_of_tower"]').val( response.data.totalTower );
				$('[name="no_flats_in_tower"]').val( response.data.totalFlats );
			}
			
			if( response.data.availableDate != '' ){
				$('[name="possession"]').val( response.data.availableDate );
				$('.possession-div').show();
			}else{
				$('.possession-div').hide();
			}
			
			if( response.data.propertyTypeId != '' && response.data.propertyTypeId != null ){
				if( response.data.propertyTypeId == 1 ){

					$('.total-no-of-tower-label').text('Total No. of Tower');
					$('.no-flats-in-tower-label').text('No. Flats in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Tower');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Flats in Tower');
					
				}else if( response.data.propertyTypeId == 2 ){
					
					$('.total-no-of-tower-label').text('Total No. of Villa');
					$('.no-flats-in-tower-label').text('No. Villa in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Villa');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Villa in Tower');
					
				}else if( response.data.propertyTypeId == 3 ){
					
					$('.total-no-of-tower-label').text('Total No. of Office');
					$('.no-flats-in-tower-label').text('No. Office in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Office');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Office in Tower');
					
				}else if( response.data.propertyTypeId == 4 ){
					
					$('.total-no-of-tower-label').text('Total No. of Shop');
					$('.no-flats-in-tower-label').text('No. Shop in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Shop');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Shop in Tower');
					
				}else if( response.data.propertyTypeId == 5 ){
					
					$('.total-no-of-tower-label').text('Total No. of Warehouse');
					$('.no-flats-in-tower-label').text('No. Warehouse in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Warehouse');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Warehouse in Tower');
					
				}else if( response.data.propertyTypeId == 6 ){
					
					$('.total-no-of-tower-label').text('Total No. of Plot');
					$('.no-flats-in-tower-label').text('No. Plot in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Plot');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Plot in Tower');
					
				}else if( response.data.propertyTypeId == 7 ){
					
					$('.total-no-of-tower-label').text('Total No. of Land');
					$('.no-flats-in-tower-label').text('No. Land in Tower');
					
					$('.total-no-of-tower-value').attr('placeholder', 'Total No. of Land');
					$('.no-flats-in-tower-value').attr('placeholder', 'No. Land in Tower');
				}
			}
			
		}
	});
}

$.validator.addMethod( "validateProject", function(value, element) {
	var result = true;
	ajaxResponse = $.ajax({
		type: "POST",
		async: false,
		url: site_url + "project_price/validate_project",
		dataType: "json",
		data: {
			project_name_id : $.trim($("[name='project_name_id']").val()),
			record_id :  ( ( $.trim($("[name='record_id']").val()) != null ) ? $.trim($("[name='record_id']").val()) : '' ) ,
		},
		success: function(response) {

			if (response.status_code == 101 ) {
				result = false;
			} else {
				result = true;
		    }
		}
	});
	return result;
}, "Project Price already Generated. Please Select another Project.");

function showPriceDetails( thisitem ){
	var recordId = $.trim( $(thisitem).attr('data-record-id') );
	if( recordId != '' ){
		$.ajax({
			url: site_url + 'advertisement/advertisementPriceList',
			type: 'post',
			data: { 'record_id' : recordId },
			beforeSend: function() {
				showLoader();
			},
			success: function (response) {
				hideLoader();
				
				$('.price-ajax-view').html('');
				$('.price-ajax-view').html(response);
				$('.advertisement-price-modal-title').html( $(thisitem).attr('data-record-name') );
				$('#advertisement-price').modal('show');
				
			},error:function(){
		    	
		    }
		});
	}
}

function getAdvertisementList( thisitem ){
	var property_type_id = $.trim( $('[name="slider_property_type_id"]').val() );
	var locality_id = $.trim( $('[name="slider_locality_id[]"]').val() );
	
	if( ( property_type_id != '' ) && ( locality_id != '' ) ){
		$.ajax({
			url: site_url + 'advertisement/getAdvertisementList',
			type: 'post',
			data: { 'property_type_id' : property_type_id, 'locality_id' : locality_id },
			beforeSend: function() {
				showLoader();
			},
			success: function ( response ) {
				hideLoader();
				$('.property-value').html( response );
			}
		});
	}
}

function getSliderCityList(thisitem , status) {
	var state_id = $(thisitem).val();

	//if (state_id != "") {
		$.ajax({
			type: "POST",
			url: site_url + "city/getCityList",
			data: { state_id: state_id , status: status },
			beforeSend: function() {
				//block ui
				showLoader();
			},
			success: function(response) {
				hideLoader();
				$(".city-select").html(response);
				$(".locality-list").html(response);
			},
			error: function() {
				hideLoader();
			}
		});
	//}
}

function validateAdvertisementProject( thisitem ){
	$.ajax({
		type: "POST",
		async: false,
		url: site_url + "project_price/validate_project",
		dataType: "json",
		data: {
			project_name_id : $.trim($("[name='project_name_id']").val()),
			record_id :  ( ( $.trim($("[name='record_id']").val()) != null ) ? $.trim($("[name='record_id']").val()) : '' ) ,
		},
		success: function(response) {

			if (response.status_code == 101 ) {
				alertifyMessage("error", "Project Price already Generated. Please Select another Project.");
			} else {
				return true;
		    }
		}
	});	
}

function openBootstrapModal(modal_id){
	
	$('#' + modal_id).modal({
	    backdrop: 'static',
	    keyboard: false
	})
}

function selectedAllChildRecord(thisitem){
	$(thisitem).parents('table').find('.row-checkbox').prop('checked' , $(thisitem).prop('checked'));	
}

function getAdvetimentList( thisitem , advetiment_count = null){
	if(advetiment_count !="" && advetiment_count!=null){
		$('.display-property-count-master-div').html(advetiment_count);
	}
	var purpose = $.trim( $('[name="purpose"]:checked').val() );
	var property_type_id = $.trim( $('[name="property_type_id"]').val() );
	var locality_id = $.trim( $('[name="locality_id[]"]').val() );
	var bhk_selection = $.trim( $('[name="bhk_selection"]:checked').val() );
	var static_record_id = $.trim( $('[name="record_id"]').val() );
	if(static_record_id =!"" && static_record_id !=null){
	  var project_advertisement_name = $.trim( $('[name="project_advertisement_name[]"]').val() );
	}
	
	house_type_array =[];
	$("input:checkbox[name='house_type[]']:checked").each(function(){
		if ($(this).prop("checked") == true) {
			house_type_array.push($(this).val());
		}
	});
	
	if( (purpose =="hot_project") && ( property_type_id != '' ) && ( locality_id != '')){
		$.ajax({
			url: module_url + 'getAdvetimentList',
			type: 'post',
			dataType: "json",
			data: { 'property_type_id' : property_type_id, 'locality_id' : locality_id ,'bhk_selection':bhk_selection ,'house_type':house_type_array ,'static_record_id':static_record_id ,'project_advertisement_name':project_advertisement_name},
			beforeSend: function() {
				showLoader();
			},
			success: function ( response ) {
				hideLoader();
				if(response !="" && response !=null){
					//$('.advetiment-list-value').html( response );
					$('.advetiment-list-value').html( response.html );
					$('.display-property-count-master-div').html( response.property_count );
					
				}else{
					$('.advetiment-list-value').html('');
					$('.display-property-count-master-div').html('');
				}
				staticAutoFillSeoDetails();
			}
		});
	}
	
}

function getAllLocalityUsePropertyTypeInfo(thisitem){
	var purpose = $.trim( $('[name="purpose"]:checked').val() );
	var property_type_id = $.trim( $('[name="property_type_id"]').val() );
	var bhk_selection = $.trim( $('[name="bhk_selection"]:checked').val() );
	var static_record_id = $.trim( $('[name="record_id"]').val() );
	var min_price = $.trim( $('[name="min_price"]').val() );
	var max_price = $.trim( $('[name="max_price"]').val() );
	var city_id = $.trim( $('[name="city_id"]').val() );
	var state_id = $.trim( $('[name="state_id"]').val() );
	var furnished_status = $.trim( $("[name='furnished_status']").val() );
	var pre_leased_status = $.trim( $("[name='pre_leased_status']").val());
	
	if(static_record_id != "" && static_record_id != null){
		var locality_id = $.trim( $('[name="locality_id[]"]').val() );
	}
	
	house_type_array =[];
	$("input:checkbox[name='house_type[]']:checked").each(function(){
		if ($(this).prop("checked") == true) {
			house_type_array.push($(this).val());
		}
	});
	if ( ( purpose !="" && purpose !=null ) && ( property_type_id !="" && property_type_id !=null ) ){
		$.ajax({
			url:module_url + 'getAllLocalityPropertyTypeDetails',
			type:'post',
			dataType:"json",
			data:{
					'purpose':purpose ,
					'property_type_id':property_type_id ,
					'bhk_selection':bhk_selection ,
					'min_price':min_price,
					'max_price':max_price ,
					'house_type_array':house_type_array,
					'city_id':city_id,
					'state_id':state_id,
					'static_record_id':static_record_id,
					'locality_id':locality_id,
					'furnished_status':furnished_status,
					'pre_leased_status':pre_leased_status,
				},
			beforeSend:function(){
				showLoader();
			},
			success:function(response){
				hideLoader();
				if(response !="" && response !=null){
					$('.locality-property-list-value').html(response.html);
				}else{
					$('.locality-property-list-value').html('');
				}
				if($('[name="select_locality_order[]"]').length > 0){
					// $('[name="select_locality_order[]"]').val('');
					// localitySelectedValue = [];
				}
				getPropertyList(thisitem);
			}
		})
    }
}

// Static page locality order collect
var localitySelectedValue = [];

$(document).ready(function(){
	if($('[name="select_locality_order[]"]').val() != '' && $('[name="select_locality_order[]"]').val() != null){
		localitySelectedValue = $('[name="select_locality_order[]"]').val().split(',')
	}
	
	$('[name="locality_id[]"]').on('select2:select', function(e) {
		if($('[name="locality_id[]"]').val().length == 1){
			localitySelectedValue = [];
			$('[name="select_locality_order[]"]').val('');
		}
		localitySelectedValue.push(e.params.data.id);
		$('[name="select_locality_order[]"]').val(localitySelectedValue);
		
		var selected_locality_values = $('[name="select_locality_order[]"]').val();
		if(selected_locality_values != '' && selected_locality_values != null){
			selected_locality_values = selected_locality_values.split(',')
			var first_value_of_location = selected_locality_values[0];
			first_selected_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
		}
	})
	$('[name="locality_id[]"]').on('select2:unselect', function(e) {
		if($('[name="locality_id[]"]').val().length == 0){
			localitySelectedValue = [];
			$('[name="select_locality_order[]"]').val('');
		}
		localitySelectedValue.splice(localitySelectedValue.indexOf(e.params.data.id), 1);
		$('[name="select_locality_order[]"]').val(localitySelectedValue);
		
		var selected_locality_values = $('[name="select_locality_order[]"]').val();
		if(selected_locality_values != '' && selected_locality_values != null){
			selected_locality_values = selected_locality_values.split(',')
			var first_value_of_location = selected_locality_values[0];
			first_selected_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
		}
	})
})

$(document).ready(function () {  
	var bootstrapModalCounter = 0;
	$('.modal').on("hidden.bs.modal", function (e) {
	--bootstrapModalCounter;
	
	if (bootstrapModalCounter > 0) {
			$('body').addClass('modal-open');
	}
	}).on("show.bs.modal", function (e) {
		++bootstrapModalCounter;
		$(document).off('focusin.modal');
		const zIndex = 1050 + 10 * $('.modal:visible').length; 
		$(this).css('z-index', zIndex); 
		setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack')); 
	});	
});

$(function(){
	$('.modal').on('hidden.bs.modal' , function(){
		if( $(this).find('form').length > 0 ) {
			$(this).find('form').validate().resetForm();
			$(this).find('form').trigger("reset");
			//$(this).find('form .custom-file-label').html("<?php echo $this->lang->line('choose-file') ?>"); 
		}
	});
})






function updateStatus(thisiteam , moduleName){
	
	var recordId = $(thisiteam).data("record-id");
	var	hitURL = site_url + moduleName + "/statusUpdate";
	var	currentRow = $(thisiteam);
	var	status = $(thisiteam).parents('tr').find('.status').text();
	
	if( moduleName == 'lookup_master' ){
		moduleName = $(thisiteam).attr("data-another-module-name");
	}
	status = $.trim(status);
	
	var	doStatus = null;
	
	if(status.toLowerCase() == 'active'){
		doStatus = 'Inactive';
	} else if(status.toLowerCase() == 'inactive'){
		doStatus = 'Active';
	}else if(status.toLowerCase() == 'enable'){
		doStatus = 'Enable';
	}else if(status.toLowerCase() == 'disable'){
		doStatus = 'Disable';
	}else {
		alertifyMessage('error',messages['system_error']);
		return false;
	}
	
	moduleName = moduleName.replace(/_/g, ' ');
	
	alertify.confirm(messages['update_status'], "Are you sure you want to " + doStatus + " this "+ucword(moduleName)  +" ? ", function(){	
		
		//ajax reqeust
	   jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { 'record_id' : recordId , 'status' : doStatus },
			beforeSend: function() {
		        //block ui
				showLoader();
		    },success:function(data){
		    	hideLoader();
				if(data.status_code == 1) {
					
					if( $(document).find('.filter-button').length  > 0  ){
						filterData();
					}
					alertifyMessage('success',data.message);
					currentRow.parents('tr').find('.status').html('');
					currentRow.parents('tr').find('.status').html(doStatus);
					currentRow.parents('tr').find('.status-title').attr('title' , status);
					if(status.toLowerCase() == 'active'){
						currentRow.parents('tr').find('.iconStatus').removeClass('fa fa-eye-slash');
						currentRow.parents('tr').find('.iconStatus').addClass(' fa fa-eye');
					} else {
						currentRow.parents('tr').find('.iconStatus').removeClass(' fa fa-eye');
						currentRow.parents('tr').find('.iconStatus').addClass(' fa fa-eye-slash');
					}
				} else if(data.status_code == 101) {
					alertifyMessage('error',data.message);
				} else {
					alertifyMessage('error',messages['system_error']);
				}
		    },error:function(){
		    	
		    }
	   });
	}, function(){});
}



function displayDataTable( className , paginationUrl , searchData , tableColumns , pagination_require = true , sort_order = [] , additional_custom_options = []   ){

	var common_options = {};
	common_options['bProcessing'] = true;
	common_options['iDisplayLength'] = 10;
	common_options['paging'] = pagination_require;
	common_options['searching'] = false;
	common_options['bDestroy'] = true;
	common_options['bServerSide'] = true;
	common_options['order'] = sort_order;
	common_options['ajax'] = {
        url : paginationUrl, // json datasource
        type: "post",  // type of method  , by default would be get
        data: searchData,
        beforeSend: function() {
	        //block ui
			showLoader();
	    },
	    dataFilter: function(response) {
        	hideLoader();
        	if( response != "" && response  != null ){
        		var response_json_data = JSON.parse(response);
        		var total_display_record = ( ( response_json_data.iTotalDisplayRecords != "" && response_json_data.iTotalDisplayRecords != null ) ? response_json_data.iTotalDisplayRecords : 0 );
        		$(".total-record-count").html( total_display_record.toLocaleString('en-IN'));
            } else {
            	$(".total-record-count").html(0);	
	        }
        	return response;
        },
        error: function(){  // error handling code
        	hideLoader();
        }
    };
	common_options['columns'] = tableColumns;
	
	var datatable_config_options = common_options;
    if( additional_custom_options != "" && additional_custom_options != null ){
    	var datatable_config_options = {
        	    ...common_options,
        	    ...additional_custom_options
        };
    }
    data_table = $('#'+className).DataTable(datatable_config_options);
    
    
}



function notEmpty( value){
	
	if( value != "" && value != null){
		return true;
	}
	return false;
	
}