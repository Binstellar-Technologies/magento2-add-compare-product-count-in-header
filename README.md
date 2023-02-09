## Magento2 Add Compare product count in header

> Magento2 an open-source e-commerce platform written in PHP.

&nbsp;
&nbsp;

> Here in this extension we are going to learn how to add Compare product count in header.

&nbsp;
&nbsp;

> In this extension we have added have used plugin method to over-ride the Customer section Data & pass the compare product count with it.

&nbsp;
&nbsp;

## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/Compare
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Compare
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;
&nbsp;

<kbd>

![image1](https://user-images.githubusercontent.com/123800304/217771619-d099887d-35f6-4a25-8371-2f226723ea78.png)

</kbd>

&nbsp;
&nbsp;

## Note : We have tested this option in Magento ver. 2.4.5-p1
