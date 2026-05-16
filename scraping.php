<?php
/* ====== PROTEKSI DASAR ====== */
if (
    empty($_SERVER['HTTP_REFERER']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Android') === false) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'ExoPlayer') === false) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Dart') === false) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'okhttp') === false)
) {
    http_response_code(403);
    exit("403 Forbidden - HAYOO MAU NGAPAIN KAMU.....?????");
}

$badUA = ['curl','wget','python','scrapy','bot','spider','scanner'];
foreach($badUA as $ua){
    if(stripos($_SERVER['HTTP_USER_AGENT'], $ua) !== false){
        http_response_code(403);
        exit("403 Forbidden");
    }
}

header("Content-Type: application/vnd.apple.mpegurl");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

echo <<<M3U
#EXTM3U
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/hbo.png" tvg-id="HBO.id" tvg-name="HBO" group-title="H B O",HBO (T)
https://cdnjkt913.transvision.co.id:1000/live/master/4/4028c6856b6088c3016b87d64b970b53/manifest.mpd
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Sports" tvg-logo="https://openwindows037.serv00.net/logo/mu-tv.png",MUTV
https://get.perfecttv.net/mutv.mpd
#EXTINF:-1 tvg-id="REAL MADRID TV" tvg-logo="https://openwindows037.serv00.net/logo/real-madrid-tv.png" group-title="Sports",REAL MADRID TV
https://rmtv.akamaized.net/hls/live/2043154/rmtv-en-web/bitrate_3.m3u8
#EXTINF:0 tvg-logo="https://openwindows037.serv00.net/logo/dw.png" group-title="News",DW TV Germany
https://dwamdstream102.akamaized.net/hls/live/2015525/dwstream102/index.m3u8
#EXTINF:0 tvg-logo="https://mncvision.id/userfiles/image/channel/channel_202.png" group-title="Knowledge",Outdoor
https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg00718-outdoorchannela-outdoortvnz-samsungnz/playlist.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Aceh
https://ott-balancer.tvri.go.id/live/eds/Aceh/hls/Aceh.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Bali
https://ott-balancer.tvri.go.id/live/eds/Bali/hls/Bali.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Bangka Belitung
https://ott-balancer.tvri.go.id/live/eds/Babel/hls/Babel.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Bengkulu
https://ott-balancer.tvri.go.id/live/eds/Bengkulu/hls/Bengkulu.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Gorontalo
https://ott-balancer.tvri.go.id/live/eds/Gorontalo/hls/Gorontalo.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Jakarta
https://ott-balancer.tvri.go.id/live/eds/DKI/hls/DKI.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Jambi
https://ott-balancer.tvri.go.id/live/eds/Jambi/hls/Jambi.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Jawa Barat
https://ott-balancer.tvri.go.id/live/eds/Jabar/hls/Jabar.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Jawa Tengah
https://ott-balancer.tvri.go.id/live/eds/Jateng/hls/Jateng.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Jawa Timur
https://ott-balancer.tvri.go.id/live/eds/Jatim/hls/Jatim.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Kalimantan Barat
https://ott-balancer.tvri.go.id/live/eds/Kalbar/hls/Kalbar.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Kalimantan Selatan
https://ott-balancer.tvri.go.id/live/eds/Kalsel/hls/Kalsel.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Kalimantan Tengah
https://ott-balancer.tvri.go.id/live/eds/Kalteng/hls/Kalteng.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Kalimantan Timur
https://ott-balancer.tvri.go.id/live/eds/Kaltim/hls/Kaltim.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Lampung
https://ott-balancer.tvri.go.id/live/eds/Lampung/hls/Lampung.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Maluku
https://ott-balancer.tvri.go.id/live/eds/Ambon/hls/Ambon.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI NTB
https://ott-balancer.tvri.go.id/live/eds/NTB/hls/NTB.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI NTT
https://ott-balancer.tvri.go.id/live/eds/NTT/hls/NTT.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Papua
https://ott-balancer.tvri.go.id/live/eds/Papua/hls/Papua.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Papua Barat
https://ott-balancer.tvri.go.id/live/eds/Pabar/hls/Pabar.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Riau
https://ott-balancer.tvri.go.id/live/eds/Riau/hlstl/Riau.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sulawesi Barat
https://ott-balancer.tvri.go.id/live/eds/Sulbar/hls/Sulbar.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sulawesi Selatan
https://ott-balancer.tvri.go.id/live/eds/Sulsel/hls/Sulsel.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sulawesi Tengah
https://ott-balancer.tvri.go.id/live/eds/Sulteng/hls/Sulteng.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sulawesi Tenggara
https://ott-balancer.tvri.go.id/live/eds/Sultra/hls/Sultra.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sulawesi Utara
https://ott-balancer.tvri.go.id/live/eds/Sulut/hls/Sulut.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sumatera Barat
https://ott-balancer.tvri.go.id/live/eds/Sumbar/hls/Sumbar.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sumatera Selatan
https://ott-balancer.tvri.go.id/live/eds/Sumsel/hls/Sumsel.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Sumatera Utara
https://ott-balancer.tvri.go.id/live/eds/Sumut/hls/Sumut.m3u8
#EXTINF:-1 tvg-logo="https://openwindows037.serv00.net/logo/tvri.png" group-title="TVRI DAERAH",TVRI Yogyakarta
https://ott-balancer.tvri.go.id/live/eds/Jogjakarta/hls/Jogjakarta.m3u8
#EXTINF:-1 tvg-id="TV1" tvg-url="https://bit.ly/RtmEpg" tvg-logo="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Logo_of_TV1_%28Malaysia%29.svg/1200px-Logo_of_TV1_%28Malaysia%29.svg.png" tvg-url="https://bit.ly/JejeVisionEPG" group-title="Malaysia",TV 1
https://d25tgymtnqzu8s.cloudfront.net/smil:tv1/manifest.mpd
#EXTINF:-1 tvg-id="TV2" tvg-logo="https://upload.wikimedia.org/wikipedia/en/thumb/7/71/TV2_%28Malaysia%29_logo.svg/1200px-TV2_%28Malaysia%29_logo.svg.png" tvg-url="https://bit.ly/RtmEpg" group-title="Malaysia",TV 2
https://d25tgymtnqzu8s.cloudfront.net/smil:tv2/manifest.mpd
#EXTINF:-1 tvg-id="TV6" tvg-url="https://bit.ly/RtmEpg" tvg-logo="https://rtm-images.glueapi.io/320x0/live_channel/SALURAN_1920x1080px_TV6.jpg" group-title="Malaysia",TV 6
https://d25tgymtnqzu8s.cloudfront.net/smil:tv6/manifest.mpd
#EXTINF:-1 tvg-id="Okey" tvg-url="https://bit.ly/RtmEpg" group-title="Malaysia" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/b/b9/Okey_RTM.png",TV Okey
https://d25tgymtnqzu8s.cloudfront.net/smil:okey/manifest.mpd
#EXTINF:-1 tvg-id="Berita RTM" tvg-url="https://bit.ly/RtmEpg" tvg-logo="https://rtm-images.glueapi.io/320x0/live_channel/berita_bckg.png" group-title="Malaysia",Berita RTM
https://d25tgymtnqzu8s.cloudfront.net/smil:berita/manifest.mpd
#EXTINF:-1 tvg-id="AstroAwani.my" tvg-url="https://bit.ly/RtmEpg" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/f/ff/Astro_Awani.png" group-title="Malaysia",Astro Awani
https://d2idp3hzkhjpih.cloudfront.net/out/v1/4b85d9c2bf97413eb0c9fd875599b837/index.m3u8?c
#EXTINF:-1 tvg-url="https://bit.ly/RtmEpg" tvg-id="" group-title="Malaysia" tvg-logo="https://rtm-images.glueapi.io/320x0/live_channel/RTMAsean.png",RTM Asean
https://d25tgymtnqzu8s.cloudfront.net/event/smil:event1/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/APETITO_CHANNEL.jpg" group-title="Malaysia",APETITO
https://d1sq2slp9afh7o.cloudfront.net/smil:apetito/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/AURA_CHANNEL.jpg" group-title="Malaysia",AURA
https://d1sq2slp9afh7o.cloudfront.net/smil:aura/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/FITRAH_CHANNEL.jpg" group-title="Malaysia",FITRAH
https://d1sq2slp9afh7o.cloudfront.net/smil:fitrah/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/JR_CHANNEL.jpg" group-title="Malaysia",JR.
https://d1sq2slp9afh7o.cloudfront.net/smil:jr/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/LEAD_CHANNEL.jpg" group-title="Malaysia",LEAD
https://d1sq2slp9afh7o.cloudfront.net/smil:lead/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/ROLL_CHANNEL.jpg" group-title="Malaysia",ROLL
https://d1sq2slp9afh7o.cloudfront.net/smil:roll/chunklist_b2596000_slENG.m3u8
#EXTINF:-1 tvg-logo="https://rtm-images.glueapi.io/320x0/fast_channel/SNAP_CHANNEL.jpg" group-title="Malaysia",SNAP
https://d1sq2slp9afh7o.cloudfront.net/smil:snap/chunklist_b2596000_slENG.m3u8
M3U;
