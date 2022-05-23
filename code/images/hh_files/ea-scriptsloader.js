function eaScriptLoad(staticHttpContentPrefix, storeContentPrefix)
{
		Modernizr.load([staticHttpContentPrefix+'/js/ea-env.js', storeContentPrefix+'/js/ea-autocomplete-1.2.1.js',
		                storeContentPrefix+'/js/ea-search-1.2.0.js', storeContentPrefix+'/js/ea-boscovs-search.js']);
}	