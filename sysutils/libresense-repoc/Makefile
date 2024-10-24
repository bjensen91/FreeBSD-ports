# $FreeBSD$

PORTNAME=	repoc
DISTVERSION=	20230912
CATEGORIES=	sysutils
PKGNAMEPREFIX=	libresense-

MAINTAINER=	luiz@OpenSourceCompany.com
COMMENT=	libresense dynamic repository client

LIB_DEPENDS=	libucl.so:textproc/libucl

PLIST_FILES=	sbin/libresense-repoc \
		sbin/libresense-repoc-static
USE_GITLAB=	yes
GL_SITE=	https://gitlab.OpenSourceCompany.com
GL_ACCOUNT=	libresense
GL_PROJECT=	repoc
GL_COMMIT=	ddff5f03312402b35b8e314cbdeb29aca7b152f3
FETCH_BEFORE_ARGS=	--no-verify-peer

.include <bsd.port.mk>
