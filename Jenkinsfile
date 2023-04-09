pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                script {
                    dockerapp = docker.build("walefsousa/sistem:${env.BUILD_ID}", ' -f ./docker/Dockerfile ./docker')        
                }
            }
        } 
    
        stage ('Push Image') {
            steps{
                script {
                     docker.withRegistry('https://hub.docker.com/', 'walef') {
                     dockerapp.push('latest')
                     dockerapp.push("${env.BUILD_ID}")
                       
                    }
                }     
            }
        }
    }
}   
