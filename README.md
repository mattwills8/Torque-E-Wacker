# Torque Child Theme Boilerplate

## GET STARTED

1.  Copy entire torque-child-theme directory into themes.

    - Include package.json, webpack.config.js, and other config files
    - Exclude node_modules if for some reason it exists

2.  Find and replace the following in the entire directory: **Note:** do not use numbers or special characters

    1.  35 E Wacker (eg 905 Fulton)
    2.  e-wacker-child (eg 905-fulton-child) **Note:** best practise is to include -child at the end
    3.  E_Wacker (eg Fulton)
    4.  https://github.com/vallgroup/Torque-E-Wacker (eg https://github.com/vallgroup/Torque-Theme)
    5.  35 East Wacker (eg Fulton)

3.  Rename directory: torque-child-theme => e-wacker-child

4.  Rename all files in this directory: {torque-child_theme}-etc-class.php => {e-wacker-child}-etc-class.php

5.  Register workspace in package.json in **project** root and add it to the setup.sh initial build script.

6.  Open new terminal, and in **project** root, run:

    ```sh
    $ yarn
    ```

    to install/link dependencies.

7.  In **project** root, run:

    ```sh
    $ yarn start e-wacker-child
    ```

    to compile files to wp-content and start webpack
