<?xml version="1.0" encoding="UTF-8"?>
<!--
	@author Paul van der Meijs <code@paulvandermeijs.nl>
	@copyright Copyright (c) 2012, Paul van der Meijs
	@version 1.0
 -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:import href="file:///C%3A%2FUsers%2Fpaulvandermeijs%2FWorkspace%2FWordPress%2Ftrunk%2Fweb%2Fwp-content%2Fthemes%2Flowtone-libre%2Ftemplates%2Findex.xsl"/>
  <xsl:output method="html" encoding="utf-8" indent="no" omit-xml-declaration="yes"/>
  <!-- Footer > Additional sidebar -->
  <xsl:template name="footer">
    <footer id="footer">
      <div class="container clearfix">
        <xsl:apply-templates select="sidebars/sidebar[@id='sidebar-2']"/>
        <xsl:apply-templates select="sidebars/sidebar[@id='sidebar-3']"/>
        <xsl:apply-templates select="sidebars/sidebar[@id='sidebar-4']"/>
        <hr/>
        <xsl:apply-templates select="sidebars/sidebar[@id='sidebar-5']">
          <xsl:with-param name="width">full</xsl:with-param>
        </xsl:apply-templates>
      </div>
    </footer>
    <xsl:value-of select="footer" disable-output-escaping="yes"/>
  </xsl:template>
  <xsl:include href="file:///C%3A%2FUsers%2Fpaulvandermeijs%2FWorkspace%2FWordPress%2Ftrunk%2Fweb%2Fwp-content%2Fplugins%2Flowtone-woocommerce-libre%2Fassets%2Ftemplates%2Findex.xsl"/>
</xsl:stylesheet>
