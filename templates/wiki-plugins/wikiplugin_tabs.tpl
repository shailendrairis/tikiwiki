{* $Id: wikiplugin_tabs.tpl 43192 2012-09-29 03:05:56Z lindonb $ 
 * smarty template for tabs wiki plugin 
 *}
{if isset($is_slideshow) and $is_slideshow eq 'y'}
	{foreach from=$tabs key=i item=tab}
		{$tabcontent[$i]}
	{/foreach}
{else}
~np~{tabset toggle=$toggle name=$tabsetname|escape}
	{section name=ix loop=$tabs}{tab name=$tabs[ix]|escape}{$tabcontent[ix]}{/tab}{/section}
{/tabset}~/np~
{/if}
