<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <!-- <link rel="stylesheet" type="text/css" href="css/nav-bar.css" /> -->
<!--    <link rel="stylesheet" type="text/css" href="css/footer.css" />-->
<!--    <link rel="stylesheet" type="text/css" href="css/page-choose-the-genre.css" />-->
    <link rel="stylesheet" type="text/css" href="css/account-details.css" />
    <link rel="stylesheet" type="text/css" href="css/favourites.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style>
      @import url("https://fonts.googleapis.com/css?family=Inter:600,400");

      @font-face {
        font-family: "Our Story Begins FREE-Regular";
        font-style: normal;
        font-weight: 400;
        src: url("https://anima-uploads.s3.amazonaws.com/projects/602cf5525ab477d8e2c77eba/fonts/our-story-begins-free.otf")
          format("opentype");
      }

      .component-wrapper a,
      .screen a {
        text-decoration: none;
        display: contents;
      }

      .full-width-a {
        width: 100%;
      }

      .full-height-a {
        height: 100%;
      }

      .screen textarea:focus,
      .screen input:focus {
        outline: none;
      }

      .screen *,
      .component-wrapper * {
        box-sizing: border-box;
      }

      .screen div {
        -webkit-text-size-adjust: none;
      }

      .container-center-vertical,
      .container-center-horizontal {
        pointer-events: none;
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
      }

      .container-center-vertical {
        align-items: center;
        height: 100%;
      }

      .container-center-horizontal {
        justify-content: center;
        width: 100%;
      }

      .container-center-vertical > *,
      .container-center-horizontal > * {
        pointer-events: auto;
        flex-shrink: 0;
      }

      .component-wrapper,
      .screen {
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-all;
        word-break: break-word;
      }

      .auto-animated div {
        opacity: 0;
        position: absolute;
        --z-index: -1;
      }

      .auto-animated .container-center-vertical,
      .auto-animated .container-center-horizontal {
        opacity: 1;
      }

      .overlay {
        position: absolute;
        opacity: 0;
        display: none;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
      }

      .animate-appear {
        opacity: 0;
        display: block;
        animation: reveal 0.3s ease-in-out 1 normal forwards;
      }

      .animate-disappear {
        opacity: 1;
        display: block;
        animation: reveal 0.3s ease-in-out 1 reverse forwards;
      }

      .animate-nodelay {
        animation-delay: 0s;
      }

      @keyframes reveal {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .align-self-flex-start {
        align-self: flex-start;
      }
      .align-self-flex-end {
        align-self: flex-end;
      }
      .align-self-flex-center {
        align-self: center;
      }
      .valign-text-middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .valign-text-bottom {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      input:focus {
        outline: none;
      }
      .component-wrapper,
      .component-wrapper * {
        pointer-events: none;
      }

      .component-wrapper a *,
      .component-wrapper a,
      .component-wrapper input,
      .component-wrapper video,
      .component-wrapper iframe,
      .listeners-active,
      .listeners-active * {
        pointer-events: auto;
      }

      .hidden,
      .hidden * {
        visibility: hidden;
        pointer-events: none;
      }

      .smart-layers-pointers,
      .smart-layers-pointers * {
        pointer-events: auto;
        visibility: visible;
      }

      .component-wrapper.not-ready,
      .component-wrapper.not-ready * {
        visibility: hidden !important;
      }

      .listeners-active-click,
      .listeners-active-click * {
        cursor: pointer;
      }


      /* ***********************************************************  starting new styles ******************************************************/

      /*  header*/
      .rectangle-71-C61RwLL {
          background-color: var(--white);
          box-shadow: 2px 0px 4px rgba(211,211,211,1.0) , 0px 2px 4px rgba(0,0,0,0.05);;
          height: 56px;
          left: 0px;
          /*position: absolute;*/
          top: 0px;
          max-width: 1960px;
          margin: 0 auto;
          padding: 0px 20px;
          position: relative;
      }
      .navigation {
        width: 1440px;
        height: auto;
        margin: 0 auto;
        position: relative;
        padding-left: 80px;
        padding-right: 80px;
        display:table;
      }
      .page-links-container {
        vertical-align:middle; 
        display:table-cell;
      }
      /*  header*/

      /*footer*/
      .rectangle-76-C61RwLL {
          background-color: var(--eerie-black);
          height: 32px;
          left: 0px;
          /* position: absolute; */
          /*top: 2043px;*/
          width: 100%;
      }
      /*footer*/

      /*loadmore button*/
      .rectangle-79-C61RwLL {
          background-color: transparent;
          height: 40px;
          left: 579px;
          /*position: absolute;*/
          top: 1931px;
          width: 281px;
      }
      /*loadmore button*/
      .load-more-C61RwLL {
          background-color: transparent;
          color: var(--black);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 16px;
          font-style: normal;
          font-weight: 400;
          /*height: 24px;*/
          left: 679px;
          letter-spacing: 0.00px;
          line-height: 24px;
          /*position: absolute;*/
          text-align: center;
          top: 1939px;
          white-space: nowrap;
          /*width: auto;*/
      }
      /*loadmore button*/ /*results table topic*/
      .valign-text-middle {
          display: flex;
          flex-direction: column;
          justify-content: center;
      }
      /*loadmore button*/
      .border-2px-eerie-blackk {
          border: 2px solid var(--eerie-black);
      }

      /*separator above results table*/
      .vector-22-C61RwLL {
          background-color: transparent;
          height: 2px;
          left: 80px;
          /*position: absolute;*/
          top: 1384px;
          width: 1278px;
      }

      /*results table topic*/
      .results-200-C61RwLL {
          background-color: transparent;
          color: var(--black);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 20px;
          font-style: normal;
          font-weight: 700;
          height: 22px;
          left: 88px;
          letter-spacing: 0.00px;
          line-height: 28px;
          /*position: absolute;*/
          text-align: left;
          top: 1397px;
          white-space: nowrap;
          width: 546px;
      }

      /*results table*/
      .results-table {
          top: 211px;
          /*position: absolute;*/
          height: 72px;
          left: 293px;
          padding-left: 93px;
          padding-top: 31px;
          border-collapse: collapse;
          width:94%;
      }
      /*results table*/
      .results-table td {
          background-color: transparent;
          letter-spacing: 0.00px;
          /*line-height: 22px;*/
          text-align: left;
          white-space: nowrap;
          border-top: 2px solid #ddd;
          border-bottom: 2px solid #ddd;
          height:46px;
      }

      th {
          background-color: transparent;
          height:46px;
          text-align: left;
          letter-spacing: 0.00px;
          line-height: 24px;
          white-space: nowrap;
          border-top: 2.5px solid #ddd;
          border-bottom: 2.5px solid #ddd;
      }
      /*results table*/
      .title-C61RwLL {
          width: 372px;
          padding-left: 15px;
      }
      /*results table*/
      .length-C61RwLL {
          width: 518px;
          padding-left: 32px;
      }
      /*results table*/
      .action-C61RwLL {
          width: 300px;
          padding-left: 20px;
      }
      /*results table*/
      .inter-bold-black-16px {
          color: var(--black);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 16px;
          font-style: normal;
          font-weight: 700;
      }
      /*results table*/
      .inter-normal-black-14px {
          color: var(--black);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 14px;
          font-style: normal;
          font-weight: 400;
      }

      /*results table*/
      .playIcon .downloadIcon .heartIcon .pauseIcon .heartFilledIcon{
          vertical-align: middle;
          padding-top: 6px;
      }

      /*results table*/
      /* .pauseIcon {
          height: 18px;
          width: 18px;
      } */

      /*load and search buttons*/
      .buttonsoli-arydefault-C61RwLL {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          height: 41px;
          justify-content: flex-start;
          left: 1076px;
          min-width: 282px;
          /*position: absolute;*/
          top: 1072px;
          width: auto;
          padding-top: 42px;
      }
      /*load and search buttons*/
      .masterbutt-nlargetext-JC31Xq {
          align-items: center;
          background-color: var(--fuscous-gray);
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 41px;
          justify-content: flex-end;
          min-width: 282px;
          padding: 0 75.5px;
          position: relative;
          width: auto;
      }
      /*load and search buttons*/
      .content-p1rkmu {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 25px;
          justify-content: flex-start;
          overflow: hidden;
          position: relative;
          width: 129px;
      }
      /*load and search buttons*/
      .load-video-here-admDNH {
          background-color: transparent;
          flex-shrink: 1;
          height: 25px;
          letter-spacing: 0.00px;
          line-height: 25px;
          min-height: 25px;
          min-width: 129px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*load and search buttons*/
      .inter-normal-white-16px {
          color: var(--white);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 16px;
          font-style: normal;
          font-weight: 400;
      }
      /*load and search buttons*/
      .buttonsoli-arydefault-VMr6Omm {
          background-color: transparent;
          height: 41px;
          left: 1076px;
          pointer-events: auto;
          /*position: absolute;*/
          top: 1072px;
          transition: all 0.2s ease;
          width: 282px;
      }
      /*load and search buttons*/
      .buttonsoli-arydefault-VMr6Omm:hover {

          opacity: 0;
      }
      /*load and search buttons*/
      .smart-layers-pointers,
      .smart-layers-pointers * {
          pointer-events: auto;
          visibility: visible;
      }
      /*load and search buttons*/
      .masterbutt-nlargetext-ByrZT3 {
          align-items: center;
          background-color: var(--eerie-black);
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          height: 41px;
          justify-content: flex-end;
          left: 0px;
          min-width: 282px;
          padding: 0 75.5px;
          position: relative;
          top: 0px;
          width: auto;
      }
      /*load and search buttons*/
      .content-QVVfMl {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 25px;
          justify-content: flex-start;
          overflow: hidden;
          position: relative;
          width: 129px;
      }
      /*load and search buttons*/
      .load-video-here-xZK00f {
          background-color: transparent;
          flex-shrink: 1;
          height: 25px;
          letter-spacing: 0.00px;
          line-height: 25px;
          min-height: 25px;
          min-width: 129px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*load and search buttons*/
      .buttonsoli-arydefault-mzXdH99 {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          height: 41px;
          justify-content: flex-start;
          left: 1076px;
          min-width: 282px;
          /*position: absolute;*/
          top: 1152px;
          width: auto;
          padding-top: 42px;
      }
      /*load and search buttons*/
      .masterbutt-nlargetext-Sw6AQq {
          align-items: center;
          background-color: var(--fuscous-gray);
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 41px;
          justify-content: flex-end;
          min-width: 282px;
          padding: 0 59.5px;
          position: relative;
          width: auto;
      }
      /*load and search buttons*/
      .content-yNlhqY {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 25px;
          justify-content: flex-start;
          overflow: hidden;
          position: relative;
          width: 161px;
      }
      /*load and search buttons*/
      .forget-it--ets-search-qNCdGS {
          background-color: transparent;
          flex-shrink: 1;
          height: 25px;
          letter-spacing: 0.00px;
          line-height: 25px;
          min-height: 25px;
          min-width: 161px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*load and search buttons*/
      .buttonsoli-arydefault-QxM5SUU {
          background-color: transparent;
          height: 41px;
          left: 1076px;
          pointer-events: auto;
          /*position: absolute;*/
          top: 1152px;
          transition: all 0.2s ease;
          width: 282px;
      }
      .buttonsoli-arydefault-QxM5SUU:hover {

          opacity: 0;
      }
      /*load and search buttons*/
      .masterbutt-nlargetext-5416h0 {
          align-items: center;
          background-color: var(--eerie-black);
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          height: 41px;
          justify-content: flex-end;
          left: 0px;
          min-width: 282px;
          padding: 0 59.5px;
          position: relative;
          top: 0px;
          width: auto;
      }
      /*load and search buttons*/
      .content-VQyg8I {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          flex-shrink: 1;
          height: 25px;
          justify-content: flex-start;
          overflow: hidden;
          position: relative;
          width: 161px;
      }
      /*load and search buttons*/
      .forget-it--ets-search-Irc3DO {
          background-color: transparent;
          flex-shrink: 1;
          height: 25px;
          letter-spacing: 0.00px;
          line-height: 25px;
          min-height: 25px;
          min-width: 161px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }

      /*upload video box*/
      .rectangle-75-C61RwLL {
          background-color: var(--shark);
          height: 314px;
          left: 404px;
          /*position: absolute;*/
          top: 975px;
          width: 632px;
      }
      /*upload video box*/
      .select-a-v-ovies-here-C61RwLL {
          background-color: transparent;
          color: var(--white);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 14px;
          font-style: normal;
          font-weight: 500;
          height: 314px;
          left: 468px;
          letter-spacing: 0.00px;
          line-height: 22px;
          /*position: absolute;*/
          text-align: center;
          top: 1015px;
          width: 100%;
          cursor: pointer;
      }

      /*Music and video level adjusters*/
      .rectangle-76-VMr6Om {
          background-color: transparent;
          height: 245px;
          left: 138px;
          position: absolute;
          top: 1009px;
          width: 11px;
      }
      /*Music and video level adjusters*/
      .border-1px-black {
          border: 1px solid var(--black);
      }
      /*Music and video level adjusters*/
      .rectangle-77-C61RwL {
          background-color: transparent;
          height: 88px;
          left: 138px;
          position: absolute;
          top: 1166px;
          width: 12px;
      }
      /*Music and video level adjusters*/
      .ellipse-1-C61RwL {
          background-color: transparent;
          height: 22px;
          left: 133px;
          position: absolute;
          top: 1149px;
          width: 22px;
      }
      /*Music and video level adjusters*/
      .rectangle-76-mzXdH9 {
          background-color: transparent;
          height: 245px;
          left: 277px;
          position: absolute;
          top: 1009px;
          width: 11px;
      }
      /*Music and video level adjusters*/
      .rectangle-77-VMr6Om {
          background-color: transparent;
          height: 88px;
          left: 277px;
          position: absolute;
          top: 1166px;
          width: 12px;
      }
      /*Music and video level adjusters*/
      .ellipse-1-VMr6Om {
          background-color: transparent;
          height: 22px;
          left: 272px;
          position: absolute;
          top: 1149px;
          width: 22px;
      }

      /*Your Results topic*/
      .your-results-C61RwLL {
          background-color: transparent;
          height: 250px;
          left: 355px;
          letter-spacing: 0.00px;
          line-height: 64px;
          /*position: absolute;*/
          text-align: center;
          top: 805px;
          white-space: nowrap;
          width: 733px;
          width: 100%;
          /*padding-top: 125px;*/
          /*padding-left: 591px;*/
      }
      /*Your Results topic*/
      .ourstorybeginsfree-regular-normal-eerie-black-56px {
          color: var(--eerie-black);
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 56px;
          font-style: normal;
          font-weight: 400;
      }

      /*main category gif*/
      .gif-frame-C61RwLL {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          /*height: 297px;*/
          height: 348px;
          justify-content: flex-start;
          left: 0px;
          /*overflow: hidden;*/
          /*padding: 0 482px;*/
          /*position: absolute;*/
          top: 416px;
          width: 1440px;
      }
      /*main category gif*/
      .energy-1-RbxIY11 {
          background-color: transparent;
          flex-shrink: 1;
          height: 345px;
          margin-top: -3px;
          /*position: relative;*/
          width: 475px;
      }
      /*main category gif*/
      .genre-1-RbxIY1 {
          background-color: transparent;
          flex-shrink: 1;
          height: 277px;
          object-fit: cover;
          position: relative;
          width: 987px;
      }
      /*main category gif*/
      .instruments-1-RbxIY1 {
          background-color: transparent;
          flex-shrink: 1;
          height: 256px;
          object-fit: cover;
          position: relative;
          width: 397px;
      }
      /*main category gif*/
      .mood-1-RbxIY1 {
          background-color: transparent;
          flex-shrink: 1;
          height: 262px;
          position: relative;
          width: 412px;
      }

      /*view results below arrow*/
      .view-results-below-C61RwLL {
          background-color: transparent;
          height: 34px;
          left: 1159px;
          letter-spacing: 0.00px;
          line-height: normal;
          /*position: absolute;*/
          text-align: center;
          top: 623px;
          width: auto;
      }
      /*view results below arrow*/
      .ourstorybeginsfree-regular-normal-eerie-black-30px {
          color: var(--eerie-black);
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
      }
      /*view results below arrow*/
      .vector-15-C61RwLL {
          background-color: transparent;
          height: 31px;
          /*left: 1349px;*/
          position: absolute;
          /*top: 262px;*/
          /*top: 256px;*/
          width: 4px;
          margin-left: 191px;
          margin-top: -38px;
      }
      /*view results below arrow*/
      .vector-16-C61RwLL {
          background-color: transparent;
          height: 19px;
          /*left: 1343px;*/
          position: absolute;
          /*top: 285px;*/
          /*top: 274px;*/
          width: 17px;
          margin-top: -17px;
          margin-left: 185px;
      }
      /*separator above Your Results section*/
      .vector-25-C61RwLL {
          background-color: transparent;
          height: 7px;
          left: -1px;
          position: absolute;
          /*top: 711px;*/
          top: 338px;
          width: 1442px;
      }
      /*selecting circle*/
      .vector-35-C61RwL {
          background-color: transparent;
          height: 23px;
          left: 674px;
          position: absolute;
          top: 287px;
          width: 87px;
      }

      /*filter options table*/
      .filter-options-table {
          top: 211px;
          /*position: absolute;*/
          height: 72px;
          left: 293px;
          /*padding-left: 293px;*/
          padding-top: 155px;
      }
      /*filter options table*/
      .filter-options-table-td {
          width : 138px;
          height: 36px;
          text-align: center;
          color: var(--chicago);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 14px;
          font-style: normal;
          font-weight: 500;
      }

      .filter-options-table-td-selected {
          width : 138px;
          height: 36px;
          text-align: center;
          color: var(--paradiso);
          font-family: 'Inter', Helvetica, Arial, serif;
          font-size: 14px;
          font-style: normal;
          font-weight: 500;
      }

      .filter-options-table td:hover {
          color: var(--paradiso);
      }

      /*previous and next tabs*/
      .group-9-C61RwL {
          align-items: center;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: column;
          height: auto;
          justify-content: flex-start;
          left: 80px;
          min-height: 52px;
          position: absolute;
          top: 190px;
          width: 126px;
          cursor: pointer;
      }
      /*previous and next tabs*/
      .instrument-9dtg3L {
          background-color: transparent;
          flex-shrink: 1;
          height: 20px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-bottom: -18px;
          min-height: 20px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: 126px;
      }
      /*previous and next tabs*/
      .group-6-9dtg3L {
          background-color: transparent;
          flex-shrink: 1;
          height: 16px;
          margin-right: 17.0px;
          margin-top: 15px;
          position: relative;
          transform: rotate(-180.00deg);
          width: 87px;
      }
      /*previous and next tabs*/
      .group-6-9dtg3LL {
          background-color: transparent;
          flex-shrink: 1;
          /*height: 16px;*/
          margin-right: 17.0px;
          margin-top: 4px;
          position: relative;
          transform: rotate(-180.00deg);
          width: 87px;
      }
      /*previous and next tabs*/
      .group-8-C61RwL {
          align-items: center;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: column;
          height: auto;
          justify-content: flex-start;
          left: 1236px;
          min-height: 52px;
          position: absolute;
          top: 134px;
          width: 126px;
          cursor: pointer;
      }
      /*previous and next tabs*/
      .mood-3cZhlu {
          background-color: transparent;
          flex-shrink: 1;
          height: 20px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-bottom: -18px;
          min-height: 20px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: 126px;
      }
      /*previous and next tabs*/
      .group-6-3cZhlu {
          background-color: transparent;
          flex-shrink: 1;
          height: 16px;
          margin-right: 3.0px;
          margin-top: 16px;
          position: relative;
          width: 87px;
      }
      /*previous and next tabs*/
      .group-6-3cZhluU {
          background-color: transparent;
          flex-shrink: 1;
          height: 16px;
          margin-right: 3.0px;
          margin-top: -10px;
          position: relative;
          width: 87px;
          transform: rotate(180.00deg);
      }
      /*previous and next tabs*/
      .group-6-3cZhluu {
          background-color: transparent;
          flex-shrink: 1;
          /*height: 16px;*/
          margin-right: -12px;
          margin-top: -13px;
          position: relative;
          width: 87px;
      }
      /*previous and next tabs*/
      .vector-15-jUlmuf {
           background-color: transparent;
           height: 4px;
           left: -1px;
           position: absolute;
           top: 7px;
           transform: rotate(180.00deg);
           width: 83px;
       }
      /*previous and next tabs*/
      .vector-16-jUlmuf {
          background-color: transparent;
          height: 17px;
          left: 69px;
          position: absolute;
          top: -0px;
          transform: rotate(180.00deg);
          width: 18px;
      }
      /*previous and next tabs*/
      .vector-15-agmLXU {
          background-color: transparent;
          height: 4px;
          left: -1px;
          position: absolute;
          top: 7px;
          width: 83px;
      }
      /*previous and next tabs*/
      .instrument-3cZhlu {
          background-color: transparent;
          flex-shrink: 1;
          height: 20px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-bottom: -18px;
          min-height: 20px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: 126px;
      }
      /*previous and next tabs*/
      .vector-16-agmLXU {
          background-color: transparent;
          height: 17px;
          left: 69px;
          position: absolute;
          top: -1px;
          width: 18px;
      }
      /*topic*/
      .pick-the-e-ergy-level-C61RwL {
          background-color: transparent;
          height: 64px;
          left: 492px;
          letter-spacing: 0.00px;
          line-height: 64px;
          position: absolute;
          text-align: center;
          top: 145px;
          white-space: nowrap;
          width: auto;
      }
      /*topic*/
      .choose-the-genre-C61RwL {
          background-color: transparent;
          color: var(--eerie-black);
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 46px;
          font-style: normal;
          font-weight: 400;
          height: 54px;
          left: 521px;
          letter-spacing: 0.00px;
          line-height: 54px;
          position: absolute;
          text-align: center;
          top: 89px;
          white-space: nowrap;
          width: 401px;
      }
      /*topic*/
      .pick-the-instrument-C61RwL {
          background-color: transparent;
          height: 64px;
          left: 511px;
          letter-spacing: 0.00px;
          line-height: 64px;
          position: absolute;
          text-align: center;
          top: 145px;
          white-space: nowrap;
          width: auto;
      }
      /*topic*/
      .pick-the-mood-C61RwL {
          background-color: transparent;
          height: 64px;
          left: 576px;
          letter-spacing: 0.00px;
          line-height: 64px;
          position: absolute;
          text-align: center;
          top: 145px;
          white-space: nowrap;
          width: auto;
      }
      /*category */
      .genre-G2B5sx-highlight {
          background-color: transparent;
          color: var(--paradiso);
          flex-shrink: 1;
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
          height: 38px;
          letter-spacing: 0.00px;
          line-height: 38px;
          min-height: 38px;
          min-width: 57px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*category */
      .instrument-G2B5sx-highlight {
          background-color: transparent;
          color: var(--paradiso);
          flex-shrink: 1;
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
          height: 38px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-left: 87px;
          min-height: 38px;
          min-width: 98px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*category */
      .energy-level-G2B5sx-highlight {
          background-color: transparent;
          color: var(--paradiso);
          flex-shrink: 1;
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
          height: 38px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-left: 94px;
          min-height: 38px;
          min-width: 115px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      /*category */
      .mood-G2B5sx-highlight {
          background-color: transparent;
          color: var(--paradiso);
          flex-shrink: 1;
          font-family: 'Our Story Begins FREE-Regular', Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
          height: 38px;
          letter-spacing: 0.00px;
          line-height: 38px;
          margin-left: 90px;
          min-height: 38px;
          min-width: 54px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }

      /*favourite table */
      .favourites-table {
          top: 230px;
          position: absolute;
          height: 72px;
          left: 82px;
          padding-left: 93px;
          padding-top: 86px;
          border-collapse: collapse;
          width: 94%;
          position: absolute;
      }
      /*favourite table */
      .favourites-table td {
          background-color: transparent;
          letter-spacing: 0.00px;
          /*line-height: 22px;*/
          text-align: left;
          white-space: nowrap;
          border-top: 2px solid #ddd;
          border-bottom: 2px solid #ddd;
          height:46px;
      }

      /*music and video level sliders*/
      .slider{
          /*transform: rotate(-90.00deg);*/
          height:11px;
          width:245px;
      }
      /*music and video level sliders*/
      .slider::-moz-range-progress {
          -webkit-appearance: none;
          /*width: 245px;*/
          height: 11px;
          background: var(--eerie-black);
      }
      /*music and video level sliders*/
      .slider::-moz-range-track {
          -webkit-appearance: none;
          /*width: 245px;*/
          height: 11px;
          background: var(--white);
          border: 0.1px solid var(--eerie-black);
      }
      /*music and video level sliders*/
      .slider::-moz-range-thumb {
          background-color: transparent;
          width: 22px;
          height: 22px;
          outline: none;
          border: 0px;
          background: url("img/ellipse-1@2x.svg");
          cursor: pointer;
      }

      /*!*Styling the track in Chrome*!*/
      input[type="range"]{
          -webkit-appearance: none;
          -moz-apperance: none;
          background: var(--white);
          border: 0.1px solid var(--eerie-black);
          height: 11px;
          /*background-image: -webkit-gradient(*/
          /*    linear,*/
          /*    left top,*/
          /*    right top,*/
          /*    color-stop(0.15, #94A14E),*/
          /*    color-stop(0.15, #C5C5C5)*/
          /*);*/
      }

      input[type='range']::-webkit-slider-thumb {
          -webkit-appearance: none !important;
          background-color: transparent;
          background: url("img/ellipse-1@2x.svg");
          height: 22px;
          width: 22px;
          outline: none;
          border: 0px;
      }

      /*music and video level sliders*/
      .music-level-C61RwLL {
          background-color: transparent;
          height: 12px;
          left: 79px;
          letter-spacing: 0px;
          line-height: 24px;
          text-align: center;
          top: 1277px;
          white-space: nowrap;
          width: 132px;
      }
      /*music and video level sliders*/
      .video-level-C61RwLL {
          background-color: transparent;
          height: 12px;
          left: 218px;
          letter-spacing: 0px;
          line-height: 24px;
          text-align: center;
          top: 1277px;
          white-space: nowrap;
          width: 132px;
      }

      .selectorCircle {
          position: relative;
          display: inline-block;
          cursor: pointer;
          width: 138px;
          height: 23px;
      }

      .selectorCircle svg {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          pointer-events: none;
          padding-left: 25px;
      }

      .selectorCircle path {
          stroke: #37807E;
          stroke-width: 1.5px;
          stroke-dasharray: 0 1500;
      }

      .selectorCircle:hover path {
          animation: draw 1s forwards;
      }

      @keyframes draw {
          from {
              stroke-dasharray: 0 1500;
          }

          to {
              stroke-dasharray: 1500 1500;
          }
      }

      .td-background {
          background-image: url("img/vector-18@2x.svg");
      }

      .search-menu-item {
          cursor: pointer;
      }

      .viewResults {
          position: absolute;
          margin-left: 1159px;
          margin-top: 258px;
          cursor: pointer;
      }

      /* other styles from page-choose-the-genre.css */
      .inter-normal-eerie-black-16px {
          color: var(--eerie-black);
          font-family: "Inter", Helvetica, Arial, serif;
          font-size: 16px;
          font-style: normal;
          font-weight: 400;
      }
      .inter-bold-eerie-black-16px {
          color: var(--eerie-black);
          font-family: "Inter", Helvetica, Arial, serif;
          font-size: 16px;
          font-style: normal;
          font-weight: 700;
      }
      .page-choose-the-genre {
          background-color: var(--white);
          height: 100%;
          overflow-x: hidden;
          position: relative;
          width: 100%;
      }
      .barking-owl-C61RwL {
          background-color: transparent;
          height: 24px;
          left: 17px;
          position: relative;
          top: -3px;
          width: 116px;
      }
      .frame-21-C61RwL {
          align-items: flex-start;
          background-color: transparent;
          box-sizing: border-box;
          display: flex;
          flex-direction: row;
          height: 38px;
          justify-content: flex-end;
          left: 413px;
          min-width: 615px;
          padding: 0 9px;
          position: absolute;
          top: 27px;
          width: auto;
      }
      .home-C61RwL {
          background-color: transparent;
          height: 24px;
          left: 1145px;
          letter-spacing: 0px;
          line-height: 24px;
          position: absolute;
          text-align: left;
          top: 16px;
          white-space: nowrap;
          width: auto;
      }
      .logo-C61RwL {
          background-color: transparent;
          height: 44px;
          left: 0px;
          object-fit: cover;
          position: relative;
          top: 6px;
          width: 36px;
      }
      .logout-C61RwL {
          background-color: transparent;
          height: 24px;
          left: 1305px;
          letter-spacing: 0px;
          line-height: 24px;
          position: absolute;
          text-align: left;
          top: 16px;
          white-space: nowrap;
          width: auto;
      }
      .profile-C61RwL {
          background-color: transparent;
          height: 24px;
          left: 1223px;
          letter-spacing: 0px;
          line-height: 24px;
          position: absolute;
          text-align: left;
          top: 16px;
          white-space: nowrap;
          width: auto;
      }
      .x2021-copyr-s-reserved-C61RwL {
          background-color: transparent;
          color: var(--white);
          font-family: "Inter", Helvetica, Arial, serif;
          font-size: 12px;
          font-style: normal;
          font-weight: 500;
          height: auto;
          left: 0px;
          letter-spacing: 0px;
          line-height: normal;
          position: relative;
          text-align: center;
          top: 10px;
          width: auto;
      }
      :root {
          --black: rgba(0, 0, 0, 1);
          --chicago: rgba(89, 89, 89, 1);
          --eerie-black: rgba(32, 32, 32, 1);
          --fuscous-gray: rgba(85, 85, 85, 1);
          --geraldine: rgba(255, 138, 138, 1);
          --paradiso: rgba(55, 128, 126, 1);
          --shark: rgba(38, 38, 38, 1);
          --white: rgba(255, 255, 255, 1);
      }
      .genre-G2B5sx {
          background-color: transparent;
          flex-shrink: 1;
          font-family: "Our Story Begins FREE-Regular", Helvetica, Arial, serif;
          font-size: 30px;
          font-style: normal;
          font-weight: 400;
          height: 38px;
          letter-spacing: 0px;
          line-height: 38px;
          min-height: 38px;
          min-width: 57px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      .instrument-G2B5sx {
          background-color: transparent;
          flex-shrink: 1;
          height: 38px;
          letter-spacing: 0px;
          line-height: 38px;
          margin-left: 87px;
          min-height: 38px;
          min-width: 98px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      .energy-level-G2B5sx {
          background-color: transparent;
          flex-shrink: 1;
          height: 38px;
          letter-spacing: 0px;
          line-height: 38px;
          margin-left: 94px;
          min-height: 38px;
          min-width: 115px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      .mood-G2B5sx {
          background-color: transparent;
          flex-shrink: 1;
          height: 38px;
          letter-spacing: 0px;
          line-height: 38px;
          margin-left: 90px;
          min-height: 38px;
          min-width: 54px;
          position: relative;
          text-align: center;
          white-space: nowrap;
          width: auto;
      }
      input[type="range"][orient="vertical"] {
          writing-mode: bt-lr; /* IE */
          -webkit-appearance: slider-vertical; /* WebKit */
          width: 8px;
          height: 245px;
          padding: 0 5px;
      }

    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
  <body style="margin: 0; background: rgba(255, 255, 255, 1)">
    <div class="container-center-horizontal">
        <!-- @include('partials.header') -->

        @yield('content')
        <!-- @include('partials.footer') -->
    </div>
  </body>
</html>
