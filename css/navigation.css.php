<?php

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}

?>

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);

/**
 * Navigation design for Canyon
 *
 * @side       Navigation
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

#pma_navigation {
    width: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 0;
    height: 100%;
    background: #263238;
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    z-index: 800;
}

#pma_navigation_header {
    overflow: hidden;
}

#pma_navigation_content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    <?php echo $left; ?>: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db {
    width: 100%;
}

/******************************************************************************/
/* Header */

#pma_navigation #pma_navigation_header div#pmalogo {
    padding: 0;
    margin: 0;
}

#pma_navigation #pma_navigation_header div#pmalogo a {
    text-align: left;
    display: block;
    background-color: #946059;
    padding: 16px;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.3em;
    color: #fff;
    text-decoration: none;
}

#pma_navigation #pma_navigation_header div#pmalogo img {
    display: none;
}

#pma_navigation #pma_navigation_header div#pmalogo a:before {
    content: "PHP";
    font-weight: bold;
}

#pma_navigation #pma_navigation_header div#pmalogo a:after {
    content: "MYADMIN";
    font-weight: lighter;
}

#pma_navigation .pma_quick_warp {
    display: none !important;
}

#pma_navigation #navigation_controls_outer {
    display: none;
}
/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}

#pma_navigation div#pmalogo {
    <?php //better echo $GLOBALS['cfg']['logoBGC']; ?>
}

#pma_navigation #pmalogo,
#pma_navigation #serverChoice,
#pma_navigation #navipanellinks,
#pma_navigation #recentTableList,
#pma_navigation #favoriteTableList,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    padding: 5px 10px 0px;
    border: 0;
}

#pma_navigation #recentTable,
#pma_navigation #favoriteTable {
    width: 200px;
}

#pma_navigation #favoriteTableList select,
#pma_navigation #serverChoice select
 {
    width: 80%;
}

#pma_navigation_content > img.throbber {
    display: none;
    margin: .3em auto 0;
}

/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-<?php echo $left; ?>: 5px;
    overflow: hidden;
    color: #444;
    height: 74%;
    position: relative;
}
#pma_navigation_select_database {
    text-align: left;
    padding: 0px 0px 0px;
    border: 0;
    margin: 0;
}

#pma_navigation_db_select {
    margin-top: 0.5em;
    margin-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_db_select select {
    background: url("./themes/pmahomme/img/select_bg.png") repeat scroll 0 0;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #bbb;
    border-top: 1px solid #bbb;
    color: #333;
    padding: 4px 6px;
    margin: 0px 0px 0px;
    width: 92%;
    font-size: 1.11em;
}

#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree_content a.hover_show_full {
    position: relative;
    z-index: 100;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    text-decoration: underline;
}
#pma_navigation_tree li.activePointer {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}
#pma_navigation_tree li.selected {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li,
#pma_navigation_tree li.fast_filter {
    white-space: nowrap;
    padding-bottom: 4px;
    clear: both;
    min-height: 16px;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree i {
    display: block;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block.double {
    width: 2.5em;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.7em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid #666;
    border-bottom: 1px solid #666;
    position: relative;
    z-index: 0;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    <?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    <?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block a + a {
    <?php echo $left; ?>: 100%;
}
#pma_navigation_tree div.block.double a,
#pma_navigation_tree div.block.double u {
    <?php echo $left; ?>: 33%;
}
#pma_navigation_tree div.block.double a + a {
    <?php echo $left; ?>: 85%;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.6em;
    <?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -7px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    <?php echo $left; ?>: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #666;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #666;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 35px;
    border-<?php echo $left; ?>: 1px solid #666;
    list-style: none;
}
li.fast_filter input {
    margin: 3px 0 0 0;
    font-size: 0.7em;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-<?php echo $left; ?>: 4px;
    padding-<?php echo $right; ?>: 1.7em;
    width: 100%;
}
li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
}
/* IE10+ has its own reset X */
html.ie li.fast_filter span {
    display: none;
}
html.ie.ie9 li.fast_filter span,
html.ie.ie8 li.fast_filter span {
    display: auto;
}
html.ie li.fast_filter input {
    padding-<?php echo $right; ?>: .2em;
}
html.ie.ie9 li.fast_filter input,
html.ie.ie8 li.fast_filter input {
    padding-<?php echo $right; ?>: 1.7em;
}
li.fast_filter.db_fast_filter {
    border: 0;
    margin-left: 0px;
    margin-right: 10px;
}

#navigation_controls_outer {
    min-height: 21px !important;
}

#navigation_controls_outer.activePointer {
    background-color: transparent !important;
}

#navigation_controls {
    float: right;
    padding-right: 23px;
}

/* Resize handler */
#pma_navigation_resizer {
    width: 3px;
    height: 100%;
    background-color: #aaa;
    cursor: col-resize;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 240px;
    z-index: 801;
}
#pma_navigation_collapser {
    width: 32px;
    height: 32px;
    position: absolute;
    top: 10px;
    <?php echo $left; ?>: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    cursor: pointer;
    z-index: 800;
}

#pma_navigation_collapser:after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 62px;
    height: 36px;
    background: url('./themes/canyon/img/navigation/pma_navigation_collapser.png') no-repeat;
    background-position: 18px 5px;
    background-size: 26px 26px;
    background-color: #fff;
}

/* Quick warp links */
.pma_quick_warp {
    margin-top: 5px;
    margin-<?php echo $left; ?>: 2px;
    position: relative;
}
.pma_quick_warp .drop_list {
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 3px;
    padding: 2px 0;
}
.pma_quick_warp .drop_button {
    padding: 0 .3em;
    border: 1px solid #ddd;
    border-radius: .3em;
    background: #f2f2f2;
    cursor: pointer;
}
.pma_quick_warp .drop_list:hover .drop_button {
    background: #fff;
}
.pma_quick_warp .drop_list ul {
    position: absolute;
    margin: 0;
    padding: 0;
    overflow: hidden;
    overflow-y: auto;
    list-style: none;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: .3em;
    border-top-<?php echo $right; ?>-radius: 0;
    border-bottom-<?php echo $right; ?>-radius: 0;
    box-shadow: 0 0 5px #ccc;
    top: 100%;
    <?php echo $left; ?>: 3px;
    <?php echo $right; ?>: 0;
    display: none;
    z-index: 802;
}
.pma_quick_warp .drop_list:hover ul {
    display: block;
}
.pma_quick_warp .drop_list li {
    white-space: nowrap;
    padding: 0;
    border-radius: 0;
}
.pma_quick_warp .drop_list li img {
    vertical-align: sub;
}
.pma_quick_warp .drop_list li:hover {
    background: #f2f2f2;
}
.pma_quick_warp .drop_list a {
    display: block;
    padding: .2em .3em;
}
.pma_quick_warp .drop_list a.favorite_table_anchor {
    clear: left;
    float: left;
    padding: .1em .3em 0;
}


/******************************************************************************/
/* Icon */

#pma_navigation #navipanellinks {
    background-color: #21292e;
    position: absolute;
    padding: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1024;
}

#pma_navigation #navipanellinks a {
    margin: 0;
    float: left;
    display: block;
    height: 60px;
    line-height: 60px;
    vertical-align: middle;
    width: 33.33%;
}

#pma_navigation #navipanellinks a:hover {
    background-color: #1e2427;
}

#pma_navigation #navipanellinks a:nth-child(3),
#pma_navigation #navipanellinks a:nth-child(4) {
    display: none;
}

#pma_navigation .icon {
    width: 24px;
    height: 24px;
    color: #fff !important;
}

#pma_navigation #navipanellinks .icon.ic_b_home {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_home.png') !important;
    background-size: 24px 24px;
}

#pma_navigation #navipanellinks .icon.ic_s_loggoff {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_s_loggoff.png') !important;
    background-size: 21px 21px;
}

#pma_navigation #navipanellinks .icon.ic_b_docs {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_docs.png') !important;
    background-size: 24px 24px;
}

#pma_navigation #navipanellinks .icon.ic_b_sqlhelp {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_sqlhelp.png') !important;
    background-size: 24px 24px;
}

#pma_navigation .icon.ic_s_reload {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_s_reload.png') !important;
    background-size: 20px 20px;
}

#pma_navigation .icon.ic_s_db {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_s_db.png') !important;
    background-size: 20px 20px;
}

#pma_navigation .icon.ic_b_newdb {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_newdb.png') !important;
    background-size: 20px 20px;
}

#pma_navigation .icon.ic_b_minus {
    background-position: 0 0 !important;
    margin-top: 6px;
    background-image: url('./themes/canyon/img/navigation/ic_b_minus.png') !important;
    background-size: 8px 8px;
}

#pma_navigation .icon.ic_b_plus {
    background-position: 0 0 !important;
    margin-top: 6px;
    background-image: url('./themes/canyon/img/navigation/ic_b_plus.png') !important;
    background-size: 8px 8px;
}

#pma_navigation .icon.ic_b_table_add {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_table_add.png') !important;
    background-size: 20px 20px;
}

#pma_navigation .icon.ic_b_props {
    background-position: 0 0 !important;
    background-image: url('./themes/canyon/img/navigation/ic_b_props.png') !important;
    background-size: 18px 18px;
}

/******************************************************************************/
/* Database list */

#pma_navigation_tree {
    margin: 0px !important;
}

#pma_navigation_tree a {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-weight: lighter;
}

#pma_navigation_tree_content {
    padding-top: 40px;
}

#pma_navigation_tree_content > ul {
    border-radius: 0px;
    margin-bottom: 110px;
}

#pma_navigation_tree_content ul li {
    border-radius: 0px;
}

#pma_navigation_tree_content ul li {
    padding: 16px;
}

#pma_navigation_tree_content ul li a.hover_show_full {
    width: 100%;
    height: 100%;
    color: #76838F;
    padding-left: 10px;
    text-decoration: none !important;
}

#pma_navigation_tree_content ul li:hover {
    background-color: #29363b;
}

#pma_navigation_tree_content .list_container {
    padding: 0;
    margin: 12px 0 0 0;

}

#pma_navigation_tree_content > ul li.selected,
#pma_navigation_tree_content > ul li.selected:hover,
#pma_navigation_tree_content > ul li.selected:hover li {
    background-color: #29363b;
}

#pma_navigation_tree_content ul li.selected a.hover_show_full {
    color: #fff;
}

#pma_navigation_tree_content ul li .block:nth-child(1) {
    float: right;
}

#pma_navigation_tree_content ul li .block:nth-child(1) a {
    z-index: 1000;
}

#pma_navigation_tree_content ul li .block:nth-child(1) i,
#pma_navigation_tree_content ul li .block:nth-child(1) b,
#pma_navigation_tree_content ul li .block:nth-child(1) span {
    display: none;
}

#pma_navigation_tree .list_container {
    border-left: none;
}
