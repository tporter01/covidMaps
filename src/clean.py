import fnmatch
import os

targetDir = '../www'
for _file in os.listdir(targetDir):
    if fnmatch.fnmatch(_file, '??.php'):
        print('Deleting:',_file)
        tgtFile = '{0}/{1}'.format(targetDir, _file)
        os.remove(tgtFile)
print('Done')