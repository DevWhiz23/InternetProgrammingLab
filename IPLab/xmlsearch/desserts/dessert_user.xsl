<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body align="center" bgcolor="#ffd6cc" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                <h1 style="font-size:40px">DELICIOUS DESSERTS</h1>
                <table border="1" align="center" bgcolor="#ffe6e0" width="80%" style="border-color:black">
                    <tr bgcolor="black" style="color:white;font-size:20px">
                        <td>DESSERT ID</td>
                        <td>DESSERT NAME</td>
                        <td>DESCRIPTION</td>
                    </tr>
                    <xsl:for-each select="bio/dessert">
                        <tr style="text-align:center;font-weight:bold;">
                            <td>
                                <xsl:value-of select="id"/>
                            </td>
                            <td>
                                <xsl:value-of select="name"/>
                            </td>
                            <td>
                                <xsl:value-of select="description"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
