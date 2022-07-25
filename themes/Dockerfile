# This file creates a docker css-rebuilder that keeps the css updated with
# changes to the scss.
FROM node:14.20-alpine3.15

RUN apk add python2 make g++

RUN mkdir /watcher

ADD ./quark/gulpfile.js /watcher
ADD ./quark/package.json /watcher

WORKDIR /watcher

# change the gulpfile to build in a different dir
ENV BUILD_DIR /themes/quark
RUN sed -i "s|\(var watch_dir = '\)\.|\1${BUILD_DIR}|" gulpfile.js
RUN sed -i "s|\(var src_dir = '\)\.|\1${BUILD_DIR}|" gulpfile.js
RUN sed -i "s|\(var dest_dir = '\)\.|\1${BUILD_DIR}|" gulpfile.js
RUN sed -i "s|\(gulp.watch(watch_dir, \)\(build)\)|\1{usePolling: true, inverval: 1000}, \2|" gulpfile.js

RUN npm install
RUN npm install --global gulp-cli

CMD ["gulp", "watch"]
