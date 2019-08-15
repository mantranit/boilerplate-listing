<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/15/19
 * Time: 11:47 AM
 */
add_action('admin_head', 'my_custom_style');

function my_custom_style() {
    echo '<style type="text/css">
/* start block-hero */
.block-hero {
  margin: 0 calc(50% - 50vw);
  min-height: 500px;
  text-align: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  position: relative; }
  @media screen and (max-width: 767px) {
    .block-hero {
      min-height: 0;
      background-image: none !important; } }
  .block-hero figure {
    display: block; }
    @media screen and (min-width: 768px) {
      .block-hero figure {
        display: none; } }
    .block-hero figure img {
      width: 100%; }
  .block-hero__intro {
    padding: 15px; }
    .block-hero__intro p {
      margin: 0; }
    @media screen and (min-width: 768px) {
      .block-hero__intro {
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 10%;
        padding: 15px; } }
    @media screen and (min-width: 1280px) {
      .block-hero__intro {
        bottom: 10%; } }
    @media screen and (min-width: 768px) {
      .block-hero__intro__inner {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 15px;
        max-width: 1100px;
        margin: 0 auto; } }
    @media screen and (min-width: 1024px) {
      .block-hero__intro__inner {
        font-size: 20px; } }
    @media screen and (min-width: 1280px) {
      .block-hero__intro__inner {
        font-size: 22px; } }

/* end block-hero */
    /* start block-history */
.block-history {
  font-size: 16px;
  border-bottom: 1px dotted #ccc;
  margin-bottom: 10px;
  line-height: 1.2; }
  @media screen and (max-width: 767px) {
    .block-history {
      font-size: 14px;
      margin-bottom: 5px; } }
  @media screen and (max-width: 1023px) {
    .block-history {
      display: block;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch; } }
  .block-history td {
    padding: 5px 10px; }
    @media screen and (min-width: 768px) {
      .block-history td {
        padding: 10px 20px; } }
  .block-history tr .year {
    width: 70px; }
    @media screen and (min-width: 768px) {
      .block-history tr .year {
        width: 200px; } }
  .block-history tr .month {
    width: 56px; }
  .block-history tr .content {
    font-size: 0.9em; }
  .block-history tr:last-child td {
    padding-bottom: 10px; }
    @media screen and (min-width: 768px) {
      .block-history tr:last-child td {
        padding-bottom: 20px; } }
  .block-history p {
    margin-bottom: 5px; }
  .block-history img {
    width: 150px; }

/* end block-history */
  </style>';
}
