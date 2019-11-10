const gulp = require("gulp");
const sass = require('gulp-sass');
sass.compiler = require('node-sass');
const autoprefixer = require('gulp-autoprefixer');

const babel = require("gulp-babel");
const minify = require("gulp-babel-minify");
const rename = require("gulp-rename");
const sourcemaps = require('gulp-sourcemaps');



const { src, dest } = require('gulp');

const { watch } = require('gulp');



const { series, parallel } = require('gulp');

function build_js(cb) {
    src("js-src/**/*.js")
      .pipe(babel())
      /*.pipe(minify({
        removeConsole: false, 
        deadcode: false
        })) 
        */
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest("js-build"));
  cb();
}


function build_sass_pages(cb) {
    src("scss/pages/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass( {outputStyle: 'compressed'} ).on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(sourcemaps.write('./maps'))
    .pipe(dest("css"));

cb();
}



function build_sass_main(cb) {
    src("scss/style/style.scss")
      .pipe(sourcemaps.init())
      .pipe(sass( {outputStyle: 'compressed'} ).on('error', sass.logError))
      .pipe(autoprefixer({
        cascade: false
      }))
      .pipe(sourcemaps.write('./maps'))
      .pipe(dest("./"));

  cb();
}

function watchsource(){
    watch(['js-src/**/*.js'], build_js);
    watch(['scss/**/*.scss'], build_sass_main);
    watch(['scss/**/*.scss'], build_sass_pages);

}


exports.watch = watchsource;
exports.js = build_js;
exports.sass_main = build_sass_main;
exports.sass_pages = build_sass_pages;