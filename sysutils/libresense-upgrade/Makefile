# $FreeBSD$

PORTNAME=	libresense-upgrade
PORTVERSION=	1.2.1
CATEGORIES=	sysutils
MASTER_SITES=	# empty
DISTFILES=	# empty
EXTRACT_ONLY=	# empty

MAINTAINER=	coreteam@libresense.org
COMMENT=	libresense upgrade script

LICENSE=	APACHE20

NO_MTREE=	yes
NO_BUILD=	yes

PLIST_FILES=	libexec/libresense-upgrade \
		sbin/libresense-repo-setup \
		sbin/libresense-upgrade

.include <bsd.port.pre.mk>

do-extract:
	@${MKDIR} ${WRKSRC}
	${CP} -r ${FILESDIR}/* ${WRKSRC}

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/sbin
	${MKDIR} ${STAGEDIR}${PREFIX}/libexec
	${MKDIR} ${STAGEDIR}${PREFIX}/share/libresense
	${INSTALL_SCRIPT} ${WRKSRC}/libresense-repo-setup \
		${STAGEDIR}${PREFIX}/sbin
	${INSTALL_SCRIPT} ${WRKSRC}/libresense-upgrade \
		${STAGEDIR}${PREFIX}/libexec
	${INSTALL_SCRIPT} ${WRKSRC}/libresense-upgrade.wrapper \
		${STAGEDIR}${PREFIX}/sbin/libresense-upgrade

.include <bsd.port.post.mk>
