---
title: Search
visible: true
---


<style>

.clearfix {

  display: block;

}



.hide-element,

.primary.hide-element {

  display: none;

}



html {

  font-size: 16px;

  text-rendering: optimizeLegibility;

  -webkit-text-size-adjust: none;

}



body {

  font-family: roboto, sans-serif;

  font-size: 1em;

  background: hsl(0, 0%, 40%);

  color: hsl(0, 0%, 85%);

  margin: 0;

  line-height: 1.6;

}



.container,

.container--outer {

  position: relative;

  width: 100%;

  max-width: 1080px;

  margin: 0 auto;

  background-color: hsl(0, 0%, 20%);

}



.wrapper {

  display: flex;

  padding: 40px;

}



.primary {

  flex: 1 0 68%;

  margin: 0;

  display: flex;

  flex-flow: column nowrap;

}



main {

  margin: 0 20px 0 0;

}



.content {

  font-size: 1em;

}



.content h2 {

  margin: 0 0 20px 0;

}



.content a {

  font-weight: 400;

  color: hsl(0, 0%, 85%);

  box-shadow: inset 0 -2px 0 hsl(261, 100%, 35%);

  text-decoration: none;

}



.content a:hover {

  font-weight: 400;

  color: hsl(0, 0%, 85%);

  background-color: hsl(261, 100%, 35%);

  text-decoration: none;

  padding-top: 2px;

  padding-bottom: 0;

  border-bottom: none;

  transition: background-color 350ms ease-out;

  box-shadow: none;

}



.sidebar {

  font-size: 1.1em;

  flex: 0 0 30%;

  margin: 0;

  padding: 0;

}



.sidebar > div {

  background-color: hsl(0, 0%, 13%);

  border-radius: 4px;

  margin: 0 0 20px;

  padding: 15px;

  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2), 0 3px 20px rgba(0, 0, 0, 0.3);

}



.search-flex {

  display: flex;

  flex-flow: column nowrap;

  margin: 8px 0 3px 0;

}



.search-wrapper {

  position: relative;

  z-index: 0;

  height: 31px;

}



.search-container {

  position: absolute;

  z-index: 1;

  width: 100%;

  display: flex;

  flex-flow: row nowrap;

  align-items: center;

  justify-content: space-evenly;

  line-height: 1.3;

  color: hsl(0, 0%, 77%);

  cursor: pointer;

  background-color: hsl(0, 0%, 16%);

  border: 1px solid hsl(0, 0%, 27%);

  border-radius: 0.5em;

}



.search-container:hover {

  border-color: hsl(0, 0%, 40%);

}



.search-container.focused {

  border-color: hsl(261, 100%, 45%);

  box-shadow: 0 0 1px 2px hsl(261, 100%, 45%);

}



#site-search a {

  color: hsl(0, 0%, 85%);

  text-decoration: none;

}



#site-search h4 {

  position: relative;

  font-family: raleway, sans-serif;

  font-weight: 500;

  line-height: 1.2;

  font-size: 1.45em;

  color: #e2e2e2;

  padding: 0 0 5px 0;

  margin: 0;

}



.underline--magical {

    background-image: linear-gradient( 120deg, hsl(261, 100%, 45%) 0%, hsl(261, 100%, 45%) 100% );

    background-repeat: no-repeat;

    background-size: 100% 0.2em;

    background-position: 0 88%;

    transition: background-size 0.25s ease-in;

}



#site-search.expanded #search-form {

  margin: 0 0 15px 0;

}



#search-form .fa {

  margin: 0 auto;

  font-size: 0.9em;

}



#search {

  flex: 1 0;

  max-width: calc(100% - 35px);

  font-size: 0.8em;

  color: hsl(0, 0%, 77%);

  background-color: transparent;

  font-family: roboto, sans-serif;

  box-sizing: border-box;

  -moz-appearance: none;

  -webkit-appearance: none;

  cursor: pointer;

  border: none;

  border-radius: 4px;

  padding: 6px 0;

  margin: 0 5px 0 0;

}



#search:hover {

  background-color: hsl(0, 0%, 16%);

}



#search:focus {

  border-color: hsl(0, 0%, 16%);

  box-shadow: none;

  color: hsl(0, 0%, 77%);

  outline: none;

}



#clear-search-results-mobile {

  display: none;

}



.clear-search-results {

  font-size: 0.9em;

  color: hsl(0, 0%, 85%);

  background-color: hsl(261, 100%, 45%);

  border-radius: 4px;

  line-height: 16px;

  padding: 7px 10px;

  box-sizing: border-box;

  text-align: center;

  width: 100%;

  min-width: 170px;

  transition: all 0.4s linear;

  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2), 0 3px 20px rgba(0, 0, 0, 0.3);

  cursor: pointer;

  border: none;

}



.clear-search-results:hover,

.clear-search-results:active,

.clear-search-results:focus,

.clear-search-results:active:hover {

  color: hsl(0, 0%, 95%);

  background-color: hsl(261, 100%, 35%);

  outline: none;

}



#search-form .search-error.hide-element {

  display: none;

}



.search-error {

  position: absolute;

  z-index: 2;

  top: 4px;

  right: 7px;

  font-size: 0.75em;

  background-color: hsl(0, 0%, 16%);

  height: 24px;

  display: flex;

  transition: all 0.5s ease-out;

  width: 95%;

}



.search-error-message {

  font-style: italic;

  color: #e6c300;

  text-align: center;

  margin: auto;

  line-height: 1;

  transition: all 0.5s ease-out;

}



.fade {

  -webkit-animation: fade 4s;

  animation: fade 4s;

  -moz-animation: fade 4s;

  -o-animation: fade 4s;

}



@-webkit-keyframes fade {

  0% {

    opacity: 0.2;

  }

  50% {

    opacity: 1;

  }

  100% {

    opacity: 0.2;

  }

}



@-moz-keyframes fade {

  0% {

    opacity: 0.2;

  }

  50% {

    opacity: 1;

  }

  100% {

    opacity: 0;

  }

}



@keyframes fade {

  0% {

    opacity: 0.2;

  }

  50% {

    opacity: 1;

  }

  100% {

    opacity: 0.2;

  }

}



@-o-keyframes fade {

  0% {

    opacity: 0.2;

  }

  50% {

    opacity: 1;

  }

  100% {

    opacity: 0.2;

  }

}



.search-results {

  flex: 1 0 68%;

  margin: 0 0 20px 0;

}



.search-query,

.search-detail {

  color: hsl(0, 0%, 70%);

  line-height: 1.2;

}



#results-count {

  font-size: 0.9em;

  margin: 0 6px 0 0;

}



.search-query {

  flex: 1 1 auto;

  font-size: 1.5em;

}



.search-query-left {

  align-self: flex-end;

}



.search-query-right {

  flex: 0 1 auto;

  text-align: right;

  white-space: nowrap;

  align-self: flex-end;

}



.search-result-page-title {

  font-size: 1.4em;

  line-height: 1.2;

}



.search-detail {

  font-size: 1.4em;

}



.search-results ul {

  list-style: none;

  margin: 0 2em 0 0;

  padding: 0;

}



.search-results a {

  text-decoration: none;

}



.search-results p {

  font-size: 0.95em;

  color: hsl(0, 0%, 70%);

  line-height: 1.45;

  margin: 10px 0 0 0;

  word-wrap: break-word;

}



.search-result-item {

  background-color: hsl(0, 0%, 13%);

  padding: 20px;

  margin: 0 0 20px 0;

  border-radius: 4px;

  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2), 0 3px 20px rgba(0, 0, 0, 0.3);

}



.search-result-item p strong {

  color: hsl(0, 0%, 95%);

}



#search-header {

  display: flex;

  flex-flow: row nowrap;

  justify-content: space-between;

  margin: 0 2em 10px 0;

}



#query {

  color: hsl(0, 0%, 95%);

  font-weight: 700;

  margin: 0 0 0 3px;

}



@media screen and (max-width: 767px) {

  .wrapper {

    display: block;

  }



  .primary {

    margin: 0;

  }



  .sidebar {

    float: none;

    width: 100%;

    margin: 0 0 40px 0;

    padding: 20px 0;

    border-top: 2px dotted hsl(0, 0%, 50%);

  }



  #search-header {

    font-size: 0.85em;

    margin: 0 0 20px 0;

  }



  #clear-search-results-mobile {

    display: block;

    font-size: 1.3em;

    padding: 10px 15px;

    margin: 0 0 20px 0;

  }



  .search-results ul {

    margin: 0;

  }

}



</style>




<div class="container">

  <header class="header"></header>

  <div class="wrapper flex">

    <div class="primary">

      <main class="main">

        <article class="post">

          <div class="content post__content clearfix">

            <h2>How to Integrate Lunr.js with a Static Web Site</h2>

            <p>This CodePen demonstrates the HTML, CSS and JavaScropt presented in a blog post on my website, <a href="https://aaronluna.dev/blog/add-search-to-static-site-lunrjs-hugo-vanillajs/" target="_blank" rel="noopener">Add Search to Your Static Site with Lunr.js</a>.</p>

            <p>The only difference between the implementation that is documented in the blog post and this CodePen is related to the JSON page data file used to build the Lunr search index. In the blog post, the JSON poge data file contains the full text of all blog posts and is fetched from the static web site. For various reasons, I have hardcoded a much smaller version (roughly the first 500 words) in the JavaScript section of this CodePen.</p>

          </div>

        </article>

      </main>

    </div>

    <section class="search-results hide-element">

      <div id="search-header">

        <div class="search-query search-query-left">search term: <span id="query"></span></div>

        <div class="search-query search-query-right"><span id="results-count"></span><span id="results-count-text"></span></div>

      </div>

      <button id="clear-search-results-mobile" class="button clear-search-results">Clear Search Results</button>

      <ul></ul>

    </section>

    <aside class="sidebar">

      <div id="site-search">

        <h4><span class="underline--magical">Search</span></h4>

        <div class="search-flex">

          <form id="search-form" name="searchForm" role="form" onsubmit="return false">

            <div class="search-wrapper">

              <div class="search-container">

                <i class="fa fa-search"></i>

                <input autocomplete="off" placeholder="" id="search" class="search-input" aria-label="Search site" type="text" name="q">

              </div>

              <div class="search-error hide-element"><span class="search-error-message"></span></div>

            </div>

          </form>

          <button id="clear-search-results-sidebar" class="button clear-search-results hide-element">Clear Search Results</button>

        </div>

      </div>

    </aside>

  </div>

</div>



<script src="https://unpkg.com/lunr/lunr.js"></script>
<script>

let pagesIndex, searchIndex;

const MAX_SUMMARY_LENGTH = 100;

const SENTENCE_BOUNDARY_REGEX = /\b\.\s/gm;

const WORD_REGEX = /\b(\w*)[\W|\s|\b]?/gm;




//const index = require('/index.full.json');
const index = fetch('/index.full.json')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.log(error));





async function initSearchIndex() {

  try {

    pagesIndex = index;

    searchIndex = lunr(function () {

      this.field("title");

      this.field("categories");

      this.field("content");

      this.ref("href");

      pagesIndex.forEach((page) => this.add(page));

    });

  } catch (e) {

    console.log(e);

  }

}



function searchBoxFocused() {

  document.querySelector(".search-container").classList.add("focused");

  document

    .getElementById("search")

    .addEventListener("focusout", () => searchBoxFocusOut());

}



function searchBoxFocusOut() {

  document.querySelector(".search-container").classList.remove("focused");

}



function handleSearchQuery(event) {

  event.preventDefault();

  const query = document.getElementById("search").value.trim().toLowerCase();

  if (!query) {

    displayErrorMessage("Please enter a search term");

    return;

  }

  const results = searchSite(query);

  if (!results.length) {

    displayErrorMessage("Your search returned no results");

    return;

  }

  renderSearchResults(query, results);

}



function displayErrorMessage(message) {

  document.querySelector(".search-error-message").innerHTML = message;

  document.querySelector(".search-container").classList.remove("focused");

  document.querySelector(".search-error").classList.remove("hide-element");

  document.querySelector(".search-error").classList.add("fade");

}



function removeAnimation() {

  this.classList.remove("fade");

  this.classList.add("hide-element");

  document.querySelector(".search-container").classList.add("focused");

}



function searchSite(query) {

  const originalQuery = query;

  query = getLunrSearchQuery(query);

  let results = getSearchResults(query);

  return results.length

    ? results

    : query !== originalQuery

    ? getSearchResults(originalQuery)

    : [];

}



function getSearchResults(query) {

  return searchIndex.search(query).flatMap((hit) => {

    if (hit.ref == "undefined") return [];

    let pageMatch = pagesIndex.filter((page) => page.href === hit.ref)[0];

    pageMatch.score = hit.score;

    return [pageMatch];

  });

}



function getLunrSearchQuery(query) {

  const searchTerms = query.split(" ");

  if (searchTerms.length === 1) {

    return query;

  }

  query = "";

  for (const term of searchTerms) {

    query += `+${term} `;

  }

  return query.trim();

}



function renderSearchResults(query, results) {

  clearSearchResults();

  updateSearchResults(query, results);

  showSearchResults();

  scrollToTop();

}



function clearSearchResults() {

  const results = document.querySelector(".search-results ul");

  while (results.firstChild) results.removeChild(results.firstChild);

}



function updateSearchResults(query, results) {

  document.getElementById("query").innerHTML = query;

  document.querySelector(".search-results ul").innerHTML = results

    .map(

      (hit) => `

    <li class="search-result-item" data-score="${hit.score.toFixed(2)}">

      <a href="${hit.href}" class="search-result-page-title">${hit.title}</a>

      <p>${createSearchResultBlurb(query, hit.content)}</p>

    </li>

    `

    )

    .join("");

  const searchResultListItems = document.querySelectorAll(".search-results ul li");

  document.getElementById("results-count").innerHTML = searchResultListItems.length;

  document.getElementById("results-count-text").innerHTML = searchResultListItems.length > 1 ? "results" : "result";

  searchResultListItems.forEach(

    (li) => (li.firstElementChild.style.color = getColorForSearchResult(li.dataset.score))

  );

}



function createSearchResultBlurb(query, pageContent) {

  const searchQueryRegex = new RegExp(createQueryStringRegex(query), "gmi");

  const searchQueryHits = Array.from(

    pageContent.matchAll(searchQueryRegex),

    (m) => m.index

  );

  const sentenceBoundaries = Array.from(

    pageContent.matchAll(SENTENCE_BOUNDARY_REGEX),

    (m) => m.index

  );

  let searchResultText = "";

  let lastEndOfSentence = 0;

  for (const hitLocation of searchQueryHits) {

    if (hitLocation > lastEndOfSentence) {

      for (let i = 0; i < sentenceBoundaries.length; i++) {

        if (sentenceBoundaries[i] > hitLocation) {

          const startOfSentence = i > 0 ? sentenceBoundaries[i - 1] + 1 : 0;

          const endOfSentence = sentenceBoundaries[i];

          lastEndOfSentence = endOfSentence;

          parsedSentence = pageContent.slice(startOfSentence, endOfSentence).trim();

          searchResultText += `${parsedSentence} ... `;

          break;

        }

      }

    }

    const searchResultWords = tokenize(searchResultText);

    const pageBreakers = searchResultWords.filter((word) => word.length > 50);

    if (pageBreakers.length > 0) {

      searchResultText = fixPageBreakers(searchResultText, pageBreakers);

    }

    if (searchResultWords.length >= MAX_SUMMARY_LENGTH) break;

  }

  return ellipsize(searchResultText, MAX_SUMMARY_LENGTH).replace(

    searchQueryRegex,

    "<strong>$&</strong>"

  );

}



function createQueryStringRegex(query) {

  const searchTerms = query.split(" ");

  if (searchTerms.length == 1) {

    return query;

  }

  query = "";

  for (const term of searchTerms) {

    query += `${term}|`;

  }

  query = query.slice(0, -1);

  return `(${query})`;

}



function tokenize(input) {

  const wordMatches = Array.from(input.matchAll(WORD_REGEX), (m) => m);

  return wordMatches.map((m) => ({

    word: m[0],

    start: m.index,

    end: m.index + m[0].length,

    length: m[0].length,

  }));

}



function fixPageBreakers(input, largeWords) {

  largeWords.forEach((word) => {

    const chunked = chunkify(word.word, 20);

    input = input.replace(word.word, chunked);

  });

  return input;

}



function chunkify(input, chunkSize) {

  let output = "";

  let totalChunks = (input.length / chunkSize) | 0;

  let lastChunkIsUneven = input.length % chunkSize > 0;

  if (lastChunkIsUneven) {

    totalChunks += 1;

  }

  for (let i = 0; i < totalChunks; i++) {

    let start = i * chunkSize;

    let end = start + chunkSize;

    if (lastChunkIsUneven && i === totalChunks - 1) {

      end = input.length;

    }

    output += input.slice(start, end) + " ";

  }

  return output;

}



function ellipsize(input, maxLength) {

  const words = tokenize(input);

  if (words.length <= maxLength) {

    return input;

  }

  return input.slice(0, words[maxLength].end) + "...";

}



function showSearchResults() {

  document.querySelector(".primary").classList.add("hide-element");

  document.querySelector(".search-results").classList.remove("hide-element");

  document.getElementById("site-search").classList.add("expanded");

  document.getElementById("clear-search-results-sidebar").classList.remove("hide-element");

}



function scrollToTop() {

  const toTopInterval = setInterval(function () {

    const supportedScrollTop = document.body.scrollTop > 0 ? document.body : document.documentElement;

    if (supportedScrollTop.scrollTop > 0) {

      supportedScrollTop.scrollTop = supportedScrollTop.scrollTop - 50;

    }

    if (supportedScrollTop.scrollTop < 1) {

      clearInterval(toTopInterval);

    }

  }, 10);

}



function getColorForSearchResult(score) {

  const warmColorHue = 171;

  const coolColorHue = 212;

  return adjustHue(warmColorHue, coolColorHue, score);

}



function adjustHue(hue1, hue2, score) {

  if (score > 3) return `hsl(${hue1}, 100%, 50%)`;

  const hueAdjust = (parseFloat(score) / 3) * (hue1 - hue2);

  const newHue = hue2 + Math.floor(hueAdjust);

  return `hsl(${newHue}, 100%, 50%)`;

}



function handleClearSearchButtonClicked() {

  hideSearchResults();

  clearSearchResults();

  document.getElementById("search").value = "";

}



function hideSearchResults() {

  document.getElementById("clear-search-results-sidebar").classList.add("hide-element");

  document.getElementById("site-search").classList.remove("expanded");

  document.querySelector(".search-results").classList.add("hide-element");

  document.querySelector(".primary").classList.remove("hide-element");

}



initSearchIndex();

document.addEventListener("DOMContentLoaded", function () {

  if (document.getElementById("search-form") != null) {

    const searchInput = document.getElementById("search");

    searchInput.addEventListener("focus", () => searchBoxFocused());

    searchInput.addEventListener("keydown", (event) => {

      if (event.keyCode == 13) handleSearchQuery(event);

    });

    document

      .querySelector(".search-error")

      .addEventListener("animationend", removeAnimation);

    document

      .querySelector(".fa-search")

      .addEventListener("click", (event) => handleSearchQuery(event));

  }

  document

    .querySelectorAll(".clear-search-results")

    .forEach((button) =>

      button.addEventListener("click", () => handleClearSearchButtonClicked())

    );

});



if (!String.prototype.matchAll) {

  String.prototype.matchAll = function (regex) {

    "use strict";

    function ensureFlag(flags, flag) {

      return flags.includes(flag) ? flags : flags + flag;

    }

    function* matchAll(str, regex) {

      const localCopy = new RegExp(regex, ensureFlag(regex.flags, "g"));

      let match;

      while ((match = localCopy.exec(str))) {

        match.index = localCopy.lastIndex - match[0].length;

        yield match;

      }

    }

    return matchAll(this, regex);

  };

}


</script>
