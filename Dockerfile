FROM bigsweater/jigsaw-docker:v1.0.7

WORKDIR /app

RUN git clone https://github.com/bigsweater/incremental-frameworks.git . \
	&& composer install \
	&& npm install \
	&& node_modules/.bin/gulp --production \
	&& jigsaw build production

FROM nginx:1.13

COPY --from=0 /app/build_production /usr/share/nginx/html
COPY nginx.conf /etc/nginx/conf.d/default.conf
