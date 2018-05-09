$(document).ready(function() {
	$(".logoHome").click(function() {
		window.location.href = 'materi.php';
	});
	$(".header").click(function() {
		window.location.href = '../index.php';
	});
	$(".buttonMateri1").click(function() {
		$(".areaMateri1").slideToggle();
	});
	$(".buttonMateri2").click(function() {
		$(".areaMateri2").slideToggle();
	});
	$(".buttonMateri3").click(function() {
		$(".areaMateri3").slideToggle();
	});
	$(".buttonMateri4").click(function() {
		$(".areaMateri4").slideToggle();
	});
	$(".buttonMateri5").click(function() {
		$(".areaMateri5").slideToggle();
	});
	$(".buttonMateri6").click(function() {
		$(".areaMateri6").slideToggle();
	});
	$(".buttonMateri7").click(function() {
		$(".areaMateri7").slideToggle();
	});
	$(".buttonMateri8").click(function() {
		$(".areaMateri8").slideToggle();
	});
	$(".buttonMateri9").click(function() {
		$(".areaMateri9").slideToggle();
	});
	$(".buttonMateri10").click(function() {
		$(".areaMateri10").slideToggle();
	});
	$(".menuMateri").click(function() {
		window.location.href = 'materi.php';
	});
	$(".menuSoal").click(function() {
		window.location.href = 'soal.php';
	});
	$(".menuVideo").click(function() {
		window.location.href = 'video.php';
	});
	$(".menuTanya").click(function() {
		window.location.href = 'tanyaJawab.php';
	});
	$(".logoUser").click(function() {
		$(".infoAkun").fadeToggle();
		$(".editProfiles").fadeToggle();
		$(".logout").fadeToggle();
	});
	$(".logout").click(function() {
		if (confirm("Apakah anda yakin ingin logout?"))
			window.location.href = 'logout.php';
	});
	$(".materiVideo").on("change",function() {
		if (this.value=="materi1") {
			$(".ruangVideo1").show();
			$(".ruangVideo2").hide();
			$(".ruangVideo3").hide();
			$(".ruangVideo4").hide();
		}
		else if (this.value=="materi2") {
			$(".ruangVideo2").show();
			$(".ruangVideo1").hide();
			$(".ruangVideo3").hide();
			$(".ruangVideo4").hide();
		}
		else if (this.value=="materi3") {
			$(".ruangVideo3").show();
			$(".ruangVideo1").hide();
			$(".ruangVideo2").hide();
			$(".ruangVideo4").hide();
		}
		else if (this.value=="materi4") {
			$(".ruangVideo4").show();
			$(".ruangVideo2").hide();
			$(".ruangVideo3").hide();
			$(".ruangVideo1").hide();
		}
		
	});
	// $(".menuTanya").click(function() {
	// 	window.location.href = 'soal.php';
	// });
	 $("body").on("contextmenu",function(e){
        return false;
    });
	 $('body').disableSelection();
});