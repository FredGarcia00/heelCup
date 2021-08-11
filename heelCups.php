<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Heel Cups
      </div>
      <div id="author">
        Emily Banks | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="./img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>No one likes to talk about it, but I’m going to put this out there because I’ve had an ongoing problem for years that I have finally solved—and I know I’m not the only one who’s been suffering from this particular problem.</p>

      <p>First, a little background.</p>

      <p>I’m an active woman, on my feet constantly as I’m moving about the house, cleaning and chasing after my three kids, cooking meals and helping with homework…the typical housewife, you might say. My problem wasn’t managing my schedule or dealing with the messes of enthusiastic children playing hard at home. I had an embarrassing and painful issue that had been plaguing me for years. My feet would get sore after a full day’s running around to keep the house in order, but I could deal with that...it was my dry, cracked heels that were the real source of my pain.</p>

      <div class="articleImgsmall" style="width:50%;">
      <img src="./img/before.jpg" width="100%" />
      </div>

      <p>I’m not exaggerating, here. Aside from the fact that it’s not a good look, my heels were actually so dry and cracked that I snagged them on the carpet, and that ended up causing a situation that needed band aids. It was so embarrassing, so painful and irritating, I just didn’t know what I was going to do about it and I was frustrated beyond belief. I talked to my husband about it; he said he had the same thing from wearing boots all day at work, but didn’t think there was anything we could do about it. I decided I wasn’t going to ‘just live with it,’ so I made an appointment with a dermatologist to figure out what was causing my heels to be so dry and cracked.</p>



      <p>That appointment changed everything for me.</p>

      <p>I explained my symptoms, and he examined my heels. He typed a few things into his laptop and then he gave me the news.</p>

      <p>“The first thing you should know, Emily, is that this isn’t going to kill you.”</p>

      <p>I couldn’t help but laugh at his dry humor.</p>

      <p>	“The second thing is…there’s a long list of salves, ointments, and other useless goop I’m supposed to recommend to you for this issue. But,” he closed his laptop and set it aside. “I’m not going to do that.”</p>

      <p>I was confused. “So what do I do, then?”</p>

      <div class="blockQuote">
         <i>	He smiled. “Some of those things can help, but I’ve actually invented something that accelerates the healing process and prevents reoccurrence of symptoms. I call them the <a class="articleLink" href="<?=$exitLink;?>">[Product Name].</a> . Essentially, you use these silicon heel cups to cover the affected area, add some salve if you like, but the cups will give your heels time to heal and soften the skin back up. As you wear them, they actually function as a preventative to further damage, as well.”
		    </i>
      </div>

      <div class="articleImgsmall" style="width:60%;">
      <img src="./img/holdingProduct.jpg" width="100%" />
      </div>

      <p>“These sound great. Do they really work, though?”</p>

      <p>“Of course they do. But I’m not trying to price gouge people who are suffering from a legitimate health issue, so I’ve kept them available online from my personal warehouse. This helps me cut out the middle man. You know, paying stocking fees and all that. Don’t buy these because I’m telling you they’re the best thing for you. Check out the website, do some research on the internet, and make your own decision. I do recommend them, because I’m certain they’re your best bet for immediate relief, as well as prevention of future damage to your dry heels, but I’m not going to force you into it. Like I said, look them up and make your own decision.”</p>

      <p>I was taken aback by his frank honesty. I thanked him for the recommendation, and I hopped online to look into the <a class="articleLink" href="<?=$exitLink;?>">[Product Name].</a> . The doctor seemed genuine enough, but I just wanted to kind of vet the product on its own before I made a decision about it.</p>

      <p>What I found surprised me.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> are not your typical pair of foot care products. Made with food-grade silicon for peak comfort and effectiveness, [Product Name]s slip on easily, fit snugly but comfortably, and are compatible with any moisturizing cream. Simply apply your go-to cream of choice, slip on the heel cup and you’ve taken your first step on the fast-track to soft, smooth heels! The problem with creams by themselves is they don’t have time to sink in with a simple application; they need something to insulate the area for maximum absorption, and until [Product Name], people were using socks or even plastic bags that simply weren’t effective. After 2 or 3 days with [Product Name], even the most severe cracked and dry heels are shown to have a significant improvement, and our durable design is made to be a long-lasting solution that also prevents further and/or worsening symptoms.</p>

      <p>Featuring a hard back that better fits the shape of your heel, [Product Name] is cutting design technology simplified to offer the best solution to painful skin cracking associated with dry heels, and guarantees a quick restoration of soft, smooth, crack-resistant skin. Because the creams are contained between the skin and the comfortable heel cup, the skin has plenty of time to absorb every drop of cream with no waste or messy seepage. Experience the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> difference for yourself; you’ll be glad you did!</p>

    </div>
  
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has sold over 8 million units directly to consumers, even without the help of being sold in stores. The [Product Name] has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igPost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igPost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The [Product Name] has started to develop a cult following, and with over 7,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Macy L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        8/1/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I was skeptical of these but after reading the reviews I figured I'd give them a try. I've had heel spurs for over 15 years and have never been able to find insoles or anything to help with the pain when I walk or stand. I tried them around the house and I didn't have any pain. I'm excited to try them at work and see how they hold up, since I stand on my feet all day.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Han A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        8/3/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I tried these on a whim after some sports injuries and walking around during the pandemic without shoes in the house all the time. Within three days I had a 90% improvement. I now put them on every morning as I get out of bed and wear in sports equipment. An added bonus is that I have always had cracked heels that few things seem to work on. I noticed, all of the sudden, my heel cracks were all gone and my feet were smooth! I have ordered two sets and recommended them to others! Thank you for this product!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Edna C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        8/5/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      These heel cups have restored and healed my extremely dry cracked painful heals like never before !!! They work exactly as described and I highly recommend them !! Great price and super quick delivery!! Thank you soo much !!

      </div>
    </div>
    <div class="articleText">
      <p>After seeing the overwhelming number of positive reviews this [Product Name] was getting compared to the many others I looked at, and with the recommendation from my dermatologist, I knew I had to try it for myself. I got on the <a class="articleLink" href="<?=$exitLink;?>">official website</a> and ordered a pair the moment it came back in stock.</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>

    <div class="articleImg" style="width:60%;">
        <img src="./img/unboxing.jpg" width="100%" />
      </div>

    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> arrived in just 2 days. I unboxed it, and just feeling the cups in my fingers, I could tell they were the real deal. The first thing I noticed was how comfortable they were, and that they actually fit my heel perfectly. No trimming or adjustments required.</p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/usingProduct.jpg" width="100%" />
      </div>

	  <p>Immediately, I understood what my dermatologist had been talking about. I was able to apply the new moisturizer I bought, and once I’d slipped the heel cups on…zero mess. No wasted moisturizer. I let it sink in for a few hours, and by the end of the day I was able to take a look. I didn’t expect the cracks to heal up immediately, but I did notice the skin around the cracks was already softening and smoothing out.</p>

    <p>The real wow moment was about three days later. Just look at the difference, here. This is my heels before the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>, when I was just trying moisturizers and then my heels after 3 days with the [Product Name]:</p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/beforeAfter.jpg" width="100%" />
      </div>

      <p>Results like that in just 3 days? My reaction?</p>

      <p>What sorcery is this?</p>

      <p>Over the course of the next few days, my heels had completely stopped hurting. As I hustled and bustled through my house barefoot, I didn’t have to avoid the carpet for fear of my heels getting damaged or hurt again. I was amazed. Not only did the [Product Name] work, it worked FAST. I told my husband about the [Product Name] and when he saw the results I’d gotten, we ordered him a pair as well.</p>

      <p>His heels were actually worse than mine, and the before and after tells the story better than my words can:</p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/maleBeforeAfter.jpg" width="100%" />
      </div>

      <p>After using <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> every day for six months now, I’m happy to report they have become absolutely essential to preventing any of those irritating symptoms from returning. These inexpensive heel cups actually do hold up; after constant use, they’re showing no signs of wearing down at all! They were very affordable, and to clean them I just wash with soap and water at the end of the day. It couldn’t be simpler, really. I can’t recommend them enough!</p>

    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their official website for just $41.34!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	It is absolutely worth it. Ever since I purchased [Product Name] from the <a class="articleLink" href="<?=$exitLink;?>">official website</a>, my heels have completely healed, my skin is soft and smooth, and I haven’t developed a single crack. No more dead skin peeling off for me!</p>

      <p>These have completely changed my life. I bought a few more pairs from the website for my parents, and less than a week after using them, they called me up to let me know how big of a difference the [Product Name] made for them, too. I just wish I would have found out about [Product Name] sooner and saved myself months of pain and anxiety!</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">[Product Name] </a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 8 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>


        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->

      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>



<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
