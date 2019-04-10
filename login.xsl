<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"  >
<xsl:template match="/">
<html> 
<body>
  <h2>User Login Details</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th >Name</th>
      <th >Mobile</th>
      <th>Gender</th>
    </tr>
    <xsl:for-each select="login/register">
    <tr>
      <td><xsl:value-of select="Name"/></td>
      <td><xsl:value-of select="mobile"/></td>
      <td><xsl:value-of select="Gender"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
