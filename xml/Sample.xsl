<?xml version="1.0" encoding="ISO-8859-1"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
  <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
    <xsl:for-each select="PRODUCTS/PRODUCT">
      <div style="background-color:pink;color:white;padding:4px">
        <p><span style="font-weight:bold">
        <xsl:value-of select="TITLE"/></span></p>
        <xsl:value-of select="PRICE"/>
      </div>
      
    
    </xsl:for-each>
  </body>
</html>
