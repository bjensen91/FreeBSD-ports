# $FreeBSD

MASTERDIR=	${.CURDIR}/../libresense-pkg-zabbix-agent

PORTNAME=	libresense-pkg-zabbix-agent6

CONFLICTS=	libresense-pkg-zabbix-agent \
		libresense-pkg-zabbix-agent4 \
		libresense-pkg-zabbix-agent44 \
		libresense-pkg-zabbix-agent5 \
		libresense-pkg-zabbix-agent54 \
		libresense-pkg-zabbix-agent62 \
		libresense-pkg-zabbix-agent64

RUN_DEPENDS=	zabbix_agentd:net-mgmt/zabbix6-agent

ZABBIXINTERNALNAME=	zabbix-agent6
ZABBIXTITLE=	Zabbix Agent 6
ZABBIXVERSION=	6

.include "${MASTERDIR}/Makefile"
