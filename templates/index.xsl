<?xml version="1.0" encoding="UTF-8"?>
<!--
	@author Paul van der Meijs <code@paulvandermeijs.nl>
	@copyright Copyright (c) 2012, Paul van der Meijs
	@version 1.0
 -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:import href="../../lowtone-libre/templates/index.xsl" />

	<xsl:output 
		method="html" 
		encoding="utf-8" 
		indent="no" 
		omit-xml-declaration="yes"  />

	
	<!-- Footer > Additional sidebar -->

	<xsl:template name="footer">
		<footer id="footer">
			<div class="container clearfix">
				<xsl:apply-templates select="sidebars/sidebar[@id='sidebar-2']" />
				<xsl:apply-templates select="sidebars/sidebar[@id='sidebar-3']" />
				<xsl:apply-templates select="sidebars/sidebar[@id='sidebar-4']" />
				<hr />
				<xsl:apply-templates select="sidebars/sidebar[@id='sidebar-5']">
					<xsl:with-param name="width">full</xsl:with-param>
				</xsl:apply-templates>
			</div>
		</footer>
		<xsl:value-of select="footer" disable-output-escaping="yes" />
	</xsl:template>
	
</xsl:stylesheet>