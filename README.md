# Unwrapt CMS

## Installation

Clone project repository:

```
cd /path/to/projects
git clone git@bitbucket.org:nbcuniversal/unwrapt-cms.git
cd ./unwrapt-cms
```

Install Node dependencies:

```
npm install
```

Run the following command in your terminal to start application in development mode:

```
npm start
```

Run the following to debug the application:

```
npm start:debug
```

The application can then be debugged in Chrome or VScode by listening on port 9229.
In chrome simpyly visit `chrome://inspect/#devices` to open the remote target.

## Production build

To build application code for use in production, run the following command in your terminal
(compiled files will be available in the `./build` directory):

```
npm run build
```

## Enable logging

To enable `redux-logger` create a file named `.env.local` in the root directory (same
location as `package.json`) and paste the following line into it:

```
REACT_APP_DEBUG=1
```

### Environment configuration

You can override any of the settings defined in the `.env` file or add new ones by including
them in the `.env.local` file. One example would be `BROWSER` - e.g. `BROWSER=google-chrome` on
Linux to launch development build in Chrome instead of your default browser.
