import re

def regString2(str):
    reg = re.compile('[Cc]([0-9a-fA-F]+)[Pp]([0-9a-fA-F]+)')
    res = reg.search(str)
    return res.groups()


if __name__ == '__main__':
    txt = ['c24p7','cA5C1pBC','CFE2P56','CFCE2P56','2423aec245bcaefff7p234bcaaee']
    for i in txt:
        print(regString2(i))
